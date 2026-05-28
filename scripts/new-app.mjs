#!/usr/bin/env node
/**
 * Scaffold a new isolated WordPress app.
 *
 * Usage: npm run new-app -- <slug> "<Display Name>" ["Description"]
 */

import {
  cpSync,
  existsSync,
  mkdirSync,
  readFileSync,
  readdirSync,
  rmSync,
  statSync,
  writeFileSync,
} from "node:fs";
import { join, dirname } from "node:path";
import { fileURLToPath } from "node:url";
import { execSync } from "node:child_process";

const root = join(dirname(fileURLToPath(import.meta.url)), "..");
const slug = process.argv[2];
const name = process.argv[3];
const description = process.argv[4] ?? `${name} WordPress site`;

if (!slug || !name) {
  console.error('Usage: npm run new-app -- <slug> "<Display Name>" ["Description"]');
  process.exit(1);
}

if (!/^[a-z][a-z0-9-]*$/.test(slug)) {
  console.error("Slug must be lowercase alphanumeric with dashes (e.g. my-hotel).");
  process.exit(1);
}

const appDir = join(root, "apps", slug);
if (existsSync(appDir)) {
  console.error(`App "${slug}" already exists.`);
  process.exit(1);
}

const templateDir = join(root, "apps/_template");
copyWithSubstitute(templateDir, appDir, {
  SLUG: slug,
  SLUG_SNAKE: slug.replace(/-/g, "_"),
  NAME: name,
  DESCRIPTION: description,
});

const themeFrom = join(appDir, "wp-content/themes/{{SLUG}}");
const themeTo = join(appDir, "wp-content/themes", slug);
if (existsSync(themeFrom)) {
  mkdirSync(dirname(themeTo), { recursive: true });
  cpSync(themeFrom, themeTo, { recursive: true });
  rmSafe(themeFrom);
}

const muFrom = join(appDir, "wp-content/mu-plugins/{{SLUG}}-activate.php");
const muTo = join(appDir, "wp-content/mu-plugins", `${slug}-activate.php`);
if (existsSync(muFrom)) {
  cpSync(muFrom, muTo);
  rmSafe(muFrom);
}

const registryPath = join(root, "apps/registry.json");
const registry = JSON.parse(readFileSync(registryPath, "utf8"));
registry.apps.push({ slug, name, theme: slug, status: "draft" });
writeFileSync(registryPath, JSON.stringify(registry, null, 2) + "\n");

console.log(`\nCreated apps/${slug}/`);
console.log(`  edit:   apps/${slug}/wp-content/`);
console.log(`  build:  npm run build -- ${slug}`);
console.log(`  deploy: Cloudways webroot → apps/${slug}/site/`);

execSync(`node scripts/build.mjs ${slug}`, { cwd: root, stdio: "inherit" });

function copyWithSubstitute(src, dest, vars) {
  mkdirSync(dest, { recursive: true });
  for (const entry of readdirSync(src)) {
    const from = join(src, entry);
    let toName = entry;
    for (const [key, val] of Object.entries(vars)) {
      toName = toName.replaceAll(`{{${key}}}`, val);
    }
    const to = join(dest, toName);
    if (statSync(from).isDirectory()) {
      copyWithSubstitute(from, to, vars);
    } else {
      let content = readFileSync(from, "utf8");
      for (const [key, val] of Object.entries(vars)) {
        content = content.replaceAll(`{{${key}}}`, val);
      }
      mkdirSync(dirname(to), { recursive: true });
      writeFileSync(to, content);
    }
  }
}

function rmSafe(path) {
  if (existsSync(path)) rmSync(path, { recursive: true, force: true });
}
