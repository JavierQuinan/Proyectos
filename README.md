# Engineering Foundations

> **Consolidation target for selected historical learning repositories.**

This repository is being transformed from an unstructured PHP learning archive into a curated engineering-foundations collection. The goal is not to preserve every old exercise. The goal is to retain only examples that still demonstrate a useful engineering concept, can be explained clearly, and pass a minimum quality/security gate.

[Versión en español](README.es.md)

## Why this repository exists

Over time, several small academic and learning repositories were created around PHP, MVC, PDO, JavaScript, Node.js, Python and Angular. Keeping every exercise as a separate public repository creates noise and weakens the signal of the professional portfolio.

This repository becomes the single curated destination for that historical engineering evidence.

## Consolidation principles

A migrated example must:

- contain code authored or materially developed by the repository owner;
- have a clear learning/engineering objective;
- avoid secrets, runtime diagnostics and machine-specific configuration;
- use reproducible setup where practical;
- distinguish historical patterns from current production recommendations;
- include concise documentation in English and Spanish;
- avoid presenting third-party templates as original engineering work.

## Phase 1

The first consolidation wave focuses on two small but useful foundations:

1. **PHP + PDO data-access fundamentals** — curated from `Mini_Sistema_PDO`.
2. **HTTP server fundamentals in Node.js and Python** — curated from `Eva` / DualServer.

Additional historical repositories are mapped in `docs/CONSOLIDATION_MAP.md` and will only be migrated after individual review.

## Structure

```text
foundations/
├── php/
│   └── pdo/
└── http/
    ├── node/
    └── python/

docs/
├── CONSOLIDATION_MAP.md
└── CONSOLIDATION_MAP.es.md
```

## Portfolio status

- Category: supporting engineering evidence
- Priority: Tier B / foundations
- Purpose: preserve useful technical evolution without maintaining dozens of low-signal repositories
- Not a flagship product
- Not presented as production architecture

The flagship portfolio remains focused on current enterprise, SaaS, ERP, open-source and product work.

## Security and truthfulness

Historical repositories can contain patterns that are acceptable for local learning but not for production. Migrated examples are reviewed before inclusion. Configuration is kept synthetic, environment-specific values are excluded, and examples are explicitly labeled as educational foundations.

`historical example != production recommendation`

`third-party template != original engineering evidence`

## Source preservation

Original repositories are not deleted as part of migration. A repository is only eligible for retirement after:

1. useful material has been extracted or explicitly rejected;
2. a backup/snapshot exists where appropriate;
3. dependencies/deployments have been checked;
4. the consolidated destination is verified;
5. retirement is recorded in the consolidation map.

## Portfolio

Main profile: [github.com/JavierQuinan](https://github.com/JavierQuinan)
