# PHP + PDO foundation

[Versión en español](README.es.md)

## Purpose

Small, self-contained data-access example showing:

- PDO configured with exceptions and native prepared statements;
- parameterized queries;
- explicit integer binding for `LIMIT` / `OFFSET`;
- a repository-style CRUD boundary;
- input validation;
- transactions;
- a reproducible SQLite demo with no external credentials.

## Run

```bash
php demo.php
```

Expected output:

```text
PDO foundation demo: OK
```

## Provenance

Curated from the historical `Mini_Sistema_PDO` repository.

Preserved concepts:

- `PDO` connection wrapper;
- prepared statements;
- CRUD repository behavior;
- transaction helper;
- validation boundaries.

Intentionally changed:

- Spanish domain names were normalized to a small neutral example;
- machine/local MySQL configuration was removed;
- the demo uses an ephemeral SQLite database;
- pagination parameters are bound explicitly as integers;
- error/transaction handling was tightened;
- no CORS or HTTP API behavior is included in this foundation.

This is an educational foundation, not a production persistence layer.
