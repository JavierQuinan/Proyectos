# Historical Repository Consolidation Map

## Scope

This document tracks the migration of selected learning repositories into `Engineering Foundations`. Source repositories are retired only after useful material is verified in the consolidated destination.

## Decision states

- `MIGRATE`: selected material should be curated into this repository.
- `MIGRATED_VALIDATED`: curated destination exists and validation passed.
- `REVIEW`: inspect before deciding whether anything is worth preserving.
- `RETIRE_AFTER_MIGRATION`: little independent portfolio value after useful material is preserved.
- `KEEP_SEPARATE`: still provides enough independent evidence to remain a repository.
- `DO_NOT_IMPORT`: third-party/template or low-value material should not be represented as original evidence.

## Phase 1 sources

| Source repository | State | Material selected | Retirement readiness |
|---|---|---|---|
| `Mini_Sistema_PDO` | MIGRATED_VALIDATED | PDO wrapper, prepared statements, transaction pattern, CRUD/data-access foundation | **READY TO ARCHIVE** — consolidated runtime demo and CI passed; source README points to destination |
| `Eva` | MIGRATED_VALIDATED | Node.js/Express and Python HTTP server fundamentals | **READY TO ARCHIVE** — Node syntax and Python compilation passed; source README points to destination |
| `ingreso` | REVIEW | Historical PHP auth/MVC patterns only if security/configuration can be modernized | No |
| `formularios` | REVIEW | Historical forms/MVC concepts only; duplicated structure should not be migrated | No |
| `Gestion_Biblioteca` | REVIEW | CRUD/MVC domain example if it adds something not already covered | No |
| `viajes_p2` | REVIEW | Inspect for a unique domain lesson before migration | No |
| `fullstack-javascript-project-98` | REVIEW | CLI/game-engine concepts; may remain separate as learning evidence | No |
| `Unidad_Medida` | REVIEW | Only original Angular/business code; exclude third-party admin templates | No |
| `SEXTO` | REVIEW | Only unique original Angular/MVC material not duplicated by `Unidad_Medida` | No |
| `app_estrutura_Monol-tica` | REVIEW | Architectural pattern only if enough source exists to explain it | No |

## Phase 1 validation evidence

GitHub Actions workflow `Validate Engineering Foundations` passed all three jobs:

- PHP 8.3 syntax + executable SQLite PDO demo;
- Node.js 20 dependency install + syntax check;
- Python 3.12 compilation.

The source repositories `Mini_Sistema_PDO` and `Eva` were then updated to identify themselves as consolidated historical sources. No code history was deleted.

## Retirement candidates outside migration

These are candidates, not automatic deletions.

| Repository | Current decision | Required action before deletion |
|---|---|---|
| `sucursales` | RETIRE candidate | snapshot/check for unique code |
| `cliente_pedido` | CONSOLIDATE candidate | compare with `clientePedido`; migrate only useful NestJS/domain material |
| `clientePedido` | CONSOLIDATE candidate | compare with `cliente_pedido`; likely newer variant but must preserve only useful code |
| `clientes_productos_proveedores` | RETIRE candidate | snapshot/check for unique code |
| `codica-js_1` | RETIRE candidate | snapshot/check |
| `examen-complexivo-grupo-3` | RETIRE candidate | retain only if academic retention is still needed |
| `ASCN-LAB` | RETIRE candidate | verify no external dependency/deployment; repository is currently empty |
| `Raizo_Enterprise` | RETIRE placeholder | keep until `nexo_pro` → Raizo naming/migration decision is completed |
| `lal_pizza` | **RESCUE / CONSOLIDATE** | deeper inspection found real landing/menu code; do **not** delete as a blank starter. Evaluate as food-business web starter or merge into a starter-kit line |

## Provenance rule

Every migrated folder must record:

- original repository;
- original purpose;
- what was preserved;
- what was intentionally omitted;
- whether the code was copied verbatim or refactored;
- validation performed after migration.

## Phase 1 completion

**Completed:**

1. PHP/PDO example is reproducible and runtime-validated.
2. Dual HTTP examples are documented and syntax-validated.
3. CI passed.
4. English and Spanish documentation are aligned.
5. Migration outcomes for the two Phase 1 sources are recorded.

Next work is tracked in issue `#3` — Phase 2 consolidation.
