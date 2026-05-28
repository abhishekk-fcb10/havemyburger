#!/usr/bin/env node
/**
 * List all apps in the monorepo registry.
 */

import { readFileSync } from "node:fs";
import { join, dirname } from "node:path";
import { fileURLToPath } from "node:url";

const root = join(dirname(fileURLToPath(import.meta.url)), "..");
const registry = JSON.parse(readFileSync(join(root, "apps/registry.json"), "utf8"));

console.log("WordPress apps in monorepo:\n");
for (const app of registry.apps) {
  const config = JSON.parse(
    readFileSync(join(root, "apps", app.slug, "app.json"), "utf8"),
  );
  console.log(`  ${app.slug}`);
  console.log(`    name:    ${config.name}`);
  console.log(`    theme:   ${config.theme}`);
  console.log(`    source:  apps/${app.slug}/wp-content/`);
  console.log(`    deploy:  apps/${app.slug}/site/`);
  if (config.cloudways?.webroot) {
    console.log(`    webroot: ${config.cloudways.webroot}`);
  }
  console.log("");
}
