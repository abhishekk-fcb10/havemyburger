# WordPress Apps Monorepo

Each app under `apps/<slug>/` is **fully isolated** — its own theme, plugins, and deploy target. No shared application code between projects.

## Structure

```
├── wordpress/                 # WordPress core (version pin for builds only)
├── apps/
│   ├── registry.json
│   ├── havemyburger/
│   │   ├── app.json           # Metadata + Cloudways webroot path
│   │   ├── wp-content/        # Edit here (themes, mu-plugins, plugins)
│   │   └── site/              # Built deploy tree (gitignored)
│   └── _template/             # Scaffold for new apps
└── scripts/
    ├── new-app.mjs
    ├── build.mjs
    └── list-apps.mjs
```

## Create a new app

```bash
npm run new-app -- my-hotel "My Hotel Site"
```

Creates `apps/my-hotel/` with a starter theme and builds `apps/my-hotel/site/`.

## Deploy workflow (per app)

```bash
# 1. Edit app source
#    apps/havemyburger/wp-content/themes/havemyburger/...

# 2. Build isolated site
npm run build -- havemyburger

# 3. Commit & push
git add .
git commit -m "Update havemyburger"
git push

# 4. Cloudways: Git Pull, then set webroot to apps/havemyburger/site/
```

## Cloudways settings (per app)

| Setting | Example (havemyburger) |
|---------|------------------------|
| Git remote | This repo |
| Branch | `main` |
| Deployment path | *(blank)* |
| **Webroot** | `apps/havemyburger/site/` |

Each Cloudways application points its webroot at a different `apps/<slug>/site/` folder.

After deploy, purge Varnish cache if you see stale content.
