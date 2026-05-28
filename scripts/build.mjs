#!/usr/bin/env node
/**
 * Build an isolated deploy tree for one app.
 *
 * Usage: npm run build -- havemyburger
 *
 * Output: apps/<slug>/site/  (WordPress core + this app's wp-content only)
 * Cloudways webroot: apps/<slug>/site/
 */

import { cpSync, existsSync, mkdirSync, readdirSync, rmSync, statSync } from "node:fs";
import { join, dirname } from "node:path";
import { fileURLToPath } from "node:url";

const root = join(dirname(fileURLToPath(import.meta.url)), "..");
const slug = process.argv[2];

if (!slug) {
  console.error("Usage: npm run build -- <slug>");
  process.exit(1);
}

const appDir = join(root, "apps", slug);
const appConfigPath = join(appDir, "app.json");

if (!existsSync(appConfigPath)) {
  console.error(`Unknown app "${slug}". Run: npm run apps`);
  process.exit(1);
}

const coreDir = join(root, "wordpress");
if (!existsSync(coreDir)) {
  console.error("Missing wordpress/ directory (WordPress core template).");
  process.exit(1);
}

const siteDir = join(appDir, "site");
if (existsSync(siteDir)) rmSync(siteDir, { recursive: true, force: true });
mkdirSync(siteDir, { recursive: true });

for (const entry of readdirSync(coreDir)) {
  cpSync(join(coreDir, entry), join(siteDir, entry), { recursive: true });
}
console.log(`  copied WordPress core → apps/${slug}/site/`);

const appWpContent = join(appDir, "wp-content");
const siteWpContent = join(siteDir, "wp-content");

if (existsSync(appWpContent)) {
  mergeDir(appWpContent, siteWpContent);
  console.log(`  merged apps/${slug}/wp-content/`);
}

console.log(`\nBuilt apps/${slug}/site/`);
console.log(`Cloudways webroot: apps/${slug}/site/`);

function mergeDir(src, dest) {
  mkdirSync(dest, { recursive: true });
  for (const entry of readdirSync(src)) {
    const from = join(src, entry);
    const to = join(dest, entry);
    if (statSync(from).isDirectory()) {
      mergeDir(from, to);
    } else {
      mkdirSync(dirname(to), { recursive: true });
      cpSync(from, to);
    }
  }
}
