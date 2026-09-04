# HTTP server foundations — Node.js and Python

[Versión en español](README.es.md)

## Purpose

Two deliberately small HTTP servers expose the same conceptual surface so the runtime differences remain easy to compare:

- `GET /`
- `GET /api/info`
- `GET /api/health`
- JSON responses
- explicit 404 behavior
- request logging
- loopback binding by default

The Node.js example uses Express. The Python example uses the standard library `http.server` implementation.

## Node.js

```bash
cd node
npm install
npm start
```

Default endpoint: `http://127.0.0.1:8000`

The application factory is exported so automated HTTP tests can be added without coupling tests to `listen()`.

## Python

```bash
cd python
python server.py
```

Default endpoint: `http://127.0.0.1:8000`

Only one example should bind to port 8000 at a time. Override `HOST` and `PORT` with environment variables when required.

## Provenance

Curated from the historical `Eva` / DualServer repository.

Preserved concepts:

- equivalent HTTP endpoints in two runtimes;
- JSON health/info responses;
- request logging;
- 404 behavior;
- direct comparison between a framework-based and standard-library server.

Intentionally changed:

- large inline presentation HTML was removed so the example focuses on server behavior;
- server names and author/repository coupling were removed;
- the Node.js app is now created through `createApp()` to improve testability;
- the Python implementation uses `ThreadingHTTPServer` and UTC timestamps;
- permissive wildcard CORS was removed because this example does not require cross-origin browser access;
- both servers bind to loopback by default.

These are learning examples, not hardened internet-facing servers.
