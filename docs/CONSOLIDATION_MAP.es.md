# Mapa de Consolidación de Repositorios Históricos

## Alcance

Este documento controla la migración de repositorios de aprendizaje seleccionados hacia `Engineering Foundations`. Los repositorios fuente solo se retiran después de verificar el material útil dentro del destino consolidado.

## Estados de decisión

- `MIGRATE`: el material seleccionado debe curarse dentro de este repositorio.
- `MIGRATED_VALIDATED`: el destino curado existe y la validación pasó.
- `REVIEW`: revisar antes de decidir si existe algo que valga preservar.
- `RETIRE_AFTER_MIGRATION`: poco valor independiente después de rescatar lo útil.
- `KEEP_SEPARATE`: todavía aporta evidencia independiente suficiente para mantenerse.
- `DO_NOT_IMPORT`: material de terceros/templates o de poco valor que no debe presentarse como evidencia propia.

## Fuentes de la Fase 1

| Repositorio fuente | Estado | Material seleccionado | Preparación para retiro |
|---|---|---|---|
| `Mini_Sistema_PDO` | MIGRATED_VALIDATED | wrapper PDO, prepared statements, transacciones y fundamento CRUD/acceso a datos | **LISTO PARA ARCHIVAR** — demo runtime consolidada y CI pasaron; README fuente apunta al destino |
| `Eva` | MIGRATED_VALIDATED | fundamentos de servidores HTTP Node.js/Express y Python | **LISTO PARA ARCHIVAR** — sintaxis Node y compilación Python pasaron; README fuente apunta al destino |
| `ingreso` | REVIEW | patrones históricos PHP auth/MVC solo si seguridad/configuración puede modernizarse | No |
| `formularios` | REVIEW | conceptos históricos forms/MVC; no migrar estructura duplicada | No |
| `Gestion_Biblioteca` | REVIEW | ejemplo CRUD/MVC si aporta algo diferente a lo ya cubierto | No |
| `viajes_p2` | REVIEW | revisar si contiene una lección de dominio única antes de migrar | No |
| `fullstack-javascript-project-98` | REVIEW | conceptos CLI/game-engine; podría mantenerse separado como evidencia de aprendizaje | No |
| `Unidad_Medida` | REVIEW | únicamente código Angular/business propio; excluir templates admin de terceros | No |
| `SEXTO` | REVIEW | solo material Angular/MVC propio y único no duplicado por `Unidad_Medida` | No |
| `app_estrutura_Monol-tica` | REVIEW | patrón arquitectónico solo si existe suficiente código para explicarlo | No |

## Evidencia de validación de Fase 1

El workflow GitHub Actions `Validate Engineering Foundations` pasó los tres jobs:

- PHP 8.3: sintaxis + demo SQLite PDO ejecutable;
- Node.js 20: instalación de dependencias + syntax check;
- Python 3.12: compilación.

Después se actualizaron los repositorios fuente `Mini_Sistema_PDO` y `Eva` para identificarlos como fuentes históricas ya consolidadas. No se eliminó historial ni código fuente.

## Candidatos a retiro fuera de la migración

Son candidatos, no eliminaciones automáticas.

| Repositorio | Decisión actual | Acción obligatoria antes de eliminar |
|---|---|---|
| `sucursales` | candidato RETIRE | snapshot/revisar código único |
| `cliente_pedido` | candidato CONSOLIDATE | comparar con `clientePedido`; migrar únicamente material NestJS/dominio útil |
| `clientePedido` | candidato CONSOLIDATE | comparar con `cliente_pedido`; parece una variante más evolucionada, pero solo preservar código útil |
| `clientes_productos_proveedores` | candidato RETIRE | snapshot/revisar código único |
| `codica-js_1` | candidato RETIRE | snapshot/revisión |
| `examen-complexivo-grupo-3` | candidato RETIRE | conservar solo si todavía existe necesidad de retención académica |
| `ASCN-LAB` | candidato RETIRE | verificar que no exista dependencia/deployment externo; actualmente está vacío |
| `Raizo_Enterprise` | placeholder RETIRE | mantener hasta cerrar la decisión de naming/migración `nexo_pro` → Raizo |
| `lal_pizza` | **RESCUE / CONSOLIDATE** | una revisión más profunda encontró landing/menu reales; **no eliminarlo** como si fuera starter vacío. Evaluar como starter para negocios de comida o integrarlo a una línea de starter kits |

## Regla de procedencia

Cada carpeta migrada debe registrar:

- repositorio original;
- propósito original;
- qué se preservó;
- qué se omitió intencionalmente;
- si el código se copió literalmente o se refactorizó;
- validación ejecutada después de migrar.

## Cierre de Fase 1

**Completado:**

1. El ejemplo PHP/PDO es reproducible y validado en runtime.
2. Los dos ejemplos HTTP están documentados y validados sintácticamente.
3. CI pasó.
4. Documentación EN/ES está alineada.
5. Los resultados de migración de las dos fuentes de Fase 1 quedaron registrados.

El siguiente trabajo está controlado en el issue `#3` — Phase 2 consolidation.
