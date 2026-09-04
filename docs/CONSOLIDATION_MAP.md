# Historical Repository Consolidation Map

## Scope

This document tracks the migration of selected learning repositories into `Engineering Foundations`. It is intentionally conservative: source repositories remain untouched until useful material is verified in the consolidated destination.

## Decision states

- `MIGRATE`: selected material should be curated into this repository.
- `REVIEW`: inspect before deciding whether anything is worth preserving.
- `RETIRE_AFTER_MIGRATION`: repository has little independent portfolio value after useful material is preserved.
- `KEEP_SEPARATE`: still provides enough independent evidence to remain a repository.
- `DO_NOT_IMPORT`: third-party/template or low-value material should not be represented as original evidence.

## Phase 1 sources

| Source repository | State | Material selected | Retirement readiness |
|---|---|---|---|
| `Mini_Sistema_PDO` | MIGRATE | PDO connection wrapper, prepared statements, transaction pattern, small CRUD/data-access example | Not yet: consolidated example must be validated first |
| `Eva` | MIGRATE | Node.js/Express and Python HTTP server fundamentals | Not yet: consolidated example must be validated first |
| `ingreso` | REVIEW | Historical PHP auth/MVC patterns only if security/configuration can be modernized | No |
| `formularios` | REVIEW | Historical forms/MVC concepts only; duplicated structure should not be migrated | No |
| `Gestion_Biblioteca` | REVIEW | CRUD/MVC domain example if it adds something not already covered | No |
| `viajes_p2` | REVIEW | Inspect for a unique domain lesson before migration | No |
| `fullstack-javascript-project-98` | REVIEW | CLI/game-engine concepts; may be retained separately as learning evidence instead | No |
| `Unidad_Medida` | REVIEW | Only original Angular/business code; exclude third-party admin templates | No |
| `SEXTO` | REVIEW | Only unique original Angular/MVC material not duplicated by `Unidad_Medida` | No |
| `app_estrutura_Monol-tica` | REVIEW | Architectural pattern only if enough source exists to explain it | No |

## Retirement candidates outside migration

These repositories were classified as likely retirement candidates in the global 57-repository audit. They are **not deleted by this phase**.

| Repository | Reason | Required action before deletion |
|---|---|---|
| `sucursales` | archived, low-signal academic exercise | snapshot/check for unique code |
| `cliente_pedido` | archived academic duplicate | compare against `clientePedido`, preserve only unique material |
| `clientePedido` | archived academic duplicate | compare against `cliente_pedido`, preserve only unique material |
| `clientes_productos_proveedores` | archived redundant academic exercise | snapshot/check for unique code |
| `codica-js_1` | archived, extremely small | snapshot/check |
| `examen-complexivo-grupo-3` | minimal academic delivery | retain only if academic retention is still needed |
| `ASCN-LAB` | empty repository | verify no external dependency/deployment, then delete |
| `Raizo_Enterprise` | empty placeholder | keep until `nexo_pro` → Raizo naming/migration decision is completed |
| `lal_pizza` | default Next.js starter signal | inspect source for unique UI before delete |

## Provenance rule

Every migrated folder must record:

- original repository;
- original purpose;
- what was preserved;
- what was intentionally omitted;
- whether the code was copied verbatim or refactored;
- validation performed after migration.

This prevents historical learning material from being misrepresented as a current production system.

## Phase completion gate

Phase 1 is complete only when:

1. the PHP/PDO example is reproducible or syntax-validated;
2. the dual HTTP examples are syntax-validated and documented;
3. CI validates the curated examples;
4. English and Spanish documentation are aligned;
5. source repos selected for retirement have a recorded migration outcome.
