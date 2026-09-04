# Fundamentos de servidores HTTP — Node.js y Python

[English version](README.md)

## Propósito

Dos servidores HTTP deliberadamente pequeños exponen la misma superficie conceptual para comparar con claridad las diferencias entre runtimes:

- `GET /`
- `GET /api/info`
- `GET /api/health`
- respuestas JSON
- comportamiento 404 explícito
- logging de requests
- binding a loopback por defecto

El ejemplo Node.js utiliza Express. El ejemplo Python utiliza la implementación `http.server` de la librería estándar.

## Node.js

```bash
cd node
npm install
npm start
```

Endpoint por defecto: `http://127.0.0.1:8000`

La factory de la aplicación se exporta para permitir pruebas HTTP automatizadas sin acoplar los tests a `listen()`.

## Python

```bash
cd python
python server.py
```

Endpoint por defecto: `http://127.0.0.1:8000`

Solo uno de los ejemplos debe usar el puerto 8000 a la vez. `HOST` y `PORT` pueden modificarse mediante variables de entorno.

## Procedencia

Curado desde el repositorio histórico `Eva` / DualServer.

Conceptos preservados:

- endpoints HTTP equivalentes en dos runtimes;
- respuestas JSON de health/info;
- logging de requests;
- comportamiento 404;
- comparación directa entre servidor basado en framework y servidor de librería estándar.

Cambios intencionales:

- se eliminó el HTML de presentación embebido para concentrar el ejemplo en comportamiento de servidor;
- se eliminó acoplamiento con nombres de servidor, autor y repositorio original;
- Node.js ahora crea la aplicación mediante `createApp()` para mejorar testabilidad;
- Python utiliza `ThreadingHTTPServer` y timestamps UTC;
- se eliminó CORS wildcard porque este ejemplo no requiere acceso cross-origin desde navegador;
- ambos servidores escuchan solo en loopback por defecto.

Son ejemplos de aprendizaje, no servidores endurecidos para exposición directa a Internet.
