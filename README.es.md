# Fundamentos de Ingeniería

> **Destino de consolidación para repositorios históricos de aprendizaje seleccionados.**

Este repositorio está evolucionando desde un archivo desordenado de ejercicios PHP hacia una colección curada de fundamentos de ingeniería. El objetivo no es conservar todos los ejercicios antiguos, sino mantener únicamente ejemplos que todavía demuestren un concepto técnico útil, puedan explicarse con claridad y superen un gate mínimo de calidad y seguridad.

[English version](README.md)

## Por qué existe este repositorio

Con el tiempo se crearon varios repositorios académicos y de aprendizaje alrededor de PHP, MVC, PDO, JavaScript, Node.js, Python y Angular. Mantener cada ejercicio como un repositorio público independiente genera ruido y reduce la señal profesional del portfolio.

Este repositorio se convierte en el único destino curado para esa evidencia histórica de aprendizaje técnico.

## Principios de consolidación

Un ejemplo migrado debe:

- contener código propio o desarrollado materialmente por el titular del repositorio;
- tener un objetivo técnico o de aprendizaje claro;
- evitar secretos, diagnósticos de runtime y configuración específica de una máquina;
- utilizar setup reproducible cuando sea razonable;
- diferenciar patrones históricos de recomendaciones actuales para producción;
- incluir documentación concisa en inglés y español;
- evitar presentar templates de terceros como trabajo propio.

## Fase 1

La primera ola de consolidación se concentra en dos fundamentos pequeños pero útiles:

1. **Fundamentos de acceso a datos con PHP + PDO** — curado desde `Mini_Sistema_PDO`.
2. **Fundamentos de servidores HTTP en Node.js y Python** — curado desde `Eva` / DualServer.

Los demás repositorios históricos están mapeados en `docs/CONSOLIDATION_MAP.es.md` y solo se migrarán después de una revisión individual.

## Estructura

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

## Estado dentro del portfolio

- Categoría: evidencia técnica de soporte
- Prioridad: Tier B / fundamentos
- Propósito: preservar evolución técnica útil sin mantener decenas de repositorios de baja señal
- No es un producto flagship
- No se presenta como arquitectura productiva

El portfolio principal continúa concentrado en trabajo enterprise, SaaS, ERP, open source y productos actuales.

## Seguridad y veracidad

Los repositorios históricos pueden contener patrones aceptables para aprendizaje local pero no apropiados para producción. Cada ejemplo se revisa antes de migrarlo. Se usa configuración sintética, se excluyen valores específicos del entorno y el material se etiqueta explícitamente como fundamento educativo.

`ejemplo histórico != recomendación para producción`

`template de terceros != evidencia de ingeniería propia`

## Preservación de fuentes

Los repositorios originales no se eliminan como parte de la migración. Un repositorio solo puede pasar a retiro cuando:

1. el material útil haya sido extraído o descartado de forma explícita;
2. exista backup/snapshot cuando corresponda;
3. se hayan revisado dependencias y deployments;
4. el destino consolidado esté verificado;
5. el retiro quede registrado en el mapa de consolidación.

## Portfolio

Perfil principal: [github.com/JavierQuinan](https://github.com/JavierQuinan)
