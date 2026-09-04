# Fundamento PHP + PDO

[English version](README.md)

## Propósito

Ejemplo pequeño y autocontenido de acceso a datos que demuestra:

- PDO configurado con excepciones y prepared statements nativos;
- queries parametrizadas;
- binding explícito de enteros para `LIMIT` / `OFFSET`;
- boundary CRUD con patrón repository;
- validación de entrada;
- transacciones;
- demo reproducible con SQLite sin credenciales externas.

## Ejecución

```bash
php demo.php
```

Salida esperada:

```text
PDO foundation demo: OK
```

## Procedencia

Curado desde el repositorio histórico `Mini_Sistema_PDO`.

Conceptos preservados:

- wrapper de conexión `PDO`;
- prepared statements;
- comportamiento CRUD tipo repository;
- helper transaccional;
- límites de validación.

Cambios intencionales:

- se normalizaron nombres de dominio a un ejemplo neutral y pequeño;
- se eliminó configuración MySQL dependiente de una máquina local;
- la demo usa una base SQLite temporal;
- parámetros de paginación se enlazan explícitamente como enteros;
- se endureció el manejo de errores/transacciones;
- este fundamento no incluye CORS ni comportamiento de API HTTP.

Es un fundamento educativo, no una capa de persistencia productiva.
