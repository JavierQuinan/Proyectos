# Mapa de Consolidación de Repositorios Históricos

## Alcance

Este documento controla la migración de repositorios de aprendizaje seleccionados hacia `Engineering Foundations`. El enfoque es deliberadamente conservador: los repositorios fuente no se tocan hasta verificar el material útil dentro del destino consolidado.

## Estados de decisión

- `MIGRATE`: el material seleccionado debe curarse dentro de este repositorio.
- `REVIEW`: revisar antes de decidir si existe algo que valga preservar.
- `RETIRE_AFTER_MIGRATION`: el repositorio tendrá poco valor independiente después de rescatar lo útil.
- `KEEP_SEPARATE`: todavía aporta evidencia independiente suficiente para mantenerse como repositorio.
- `DO_NOT_IMPORT`: material de terceros/templates o de poco valor que no debe presentarse como evidencia propia.

## Fuentes de la Fase 1

| Repositorio fuente | Estado | Material seleccionado | Preparación para retiro |
|---|---|---|---|
| `Mini_Sistema_PDO` | MIGRATE | wrapper PDO, prepared statements, transacciones y ejemplo pequeño CRUD/acceso a datos | Todavía no: primero validar el ejemplo consolidado |
| `Eva` | MIGRATE | fundamentos de servidores HTTP con Node.js/Express y Python | Todavía no: primero validar el ejemplo consolidado |
| `ingreso` | REVIEW | patrones históricos PHP auth/MVC solo si seguridad/configuración puede modernizarse | No |
| `formularios` | REVIEW | conceptos históricos forms/MVC; no migrar estructura duplicada | No |
| `Gestion_Biblioteca` | REVIEW | ejemplo CRUD/MVC si aporta algo diferente a lo ya cubierto | No |
| `viajes_p2` | REVIEW | revisar si contiene una lección de dominio única antes de migrar | No |
| `fullstack-javascript-project-98` | REVIEW | conceptos CLI/game-engine; podría conservarse separado como evidencia de aprendizaje | No |
| `Unidad_Medida` | REVIEW | únicamente código Angular/business propio; excluir templates admin de terceros | No |
| `SEXTO` | REVIEW | solo material Angular/MVC propio y único que no duplique `Unidad_Medida` | No |
| `app_estrutura_Monol-tica` | REVIEW | patrón arquitectónico únicamente si existe suficiente fuente para explicarlo | No |

## Candidatos a retiro fuera de la migración

Estos repositorios fueron clasificados como candidatos probables a retiro durante la auditoría global de 57 repositorios. **Esta fase no los elimina.**

| Repositorio | Motivo | Acción obligatoria antes de eliminar |
|---|---|---|
| `sucursales` | archivado, ejercicio académico de baja señal | snapshot/revisar código único |
| `cliente_pedido` | duplicado académico archivado | comparar con `clientePedido`, preservar solo material único |
| `clientePedido` | duplicado académico archivado | comparar con `cliente_pedido`, preservar solo material único |
| `clientes_productos_proveedores` | ejercicio académico redundante archivado | snapshot/revisar código único |
| `codica-js_1` | archivado y extremadamente pequeño | snapshot/revisión |
| `examen-complexivo-grupo-3` | entrega académica mínima | conservar solo si todavía existe necesidad de retención académica |
| `ASCN-LAB` | repositorio vacío | verificar que no tenga dependencia/deployment externo y luego eliminar |
| `Raizo_Enterprise` | placeholder vacío | mantener hasta cerrar la decisión de naming/migración `nexo_pro` → Raizo |
| `lal_pizza` | señal de starter Next.js por defecto | revisar source por UI única antes de eliminar |

## Regla de procedencia

Cada carpeta migrada debe registrar:

- repositorio original;
- propósito original;
- qué se preservó;
- qué se omitió intencionalmente;
- si el código se copió literalmente o se refactorizó;
- qué validación se ejecutó después de migrar.

Esto evita presentar material histórico de aprendizaje como si fuera un sistema productivo actual.

## Gate de cierre de fase

La Fase 1 termina únicamente cuando:

1. el ejemplo PHP/PDO sea reproducible o al menos validado sintácticamente;
2. los dos ejemplos HTTP estén documentados y validados sintácticamente;
3. CI valide los ejemplos curados;
4. documentación EN/ES esté alineada;
5. cada repositorio fuente candidato a retiro tenga un resultado de migración registrado.
