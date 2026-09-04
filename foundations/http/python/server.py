from __future__ import annotations

from datetime import datetime, timezone
from http.server import BaseHTTPRequestHandler, ThreadingHTTPServer
import json
import os


class FoundationHandler(BaseHTTPRequestHandler):
    server_version = "EngineeringFoundationsHTTP/1.0"

    def _write_json(self, status: int, payload: dict) -> None:
        body = json.dumps(payload, ensure_ascii=False).encode("utf-8")
        self.send_response(status)
        self.send_header("Content-Type", "application/json; charset=utf-8")
        self.send_header("Content-Length", str(len(body)))
        self.end_headers()
        self.wfile.write(body)

    def do_GET(self) -> None:  # noqa: N802 - stdlib hook name
        if self.path == "/":
            self._write_json(
                200,
                {
                    "name": "Engineering Foundations Python HTTP",
                    "purpose": "Educational HTTP routing and health-check example",
                },
            )
            return

        if self.path == "/api/info":
            self._write_json(
                200,
                {
                    "runtime": "Python",
                    "framework": "http.server",
                    "version": "1.0.0",
                },
            )
            return

        if self.path == "/api/health":
            self._write_json(
                200,
                {
                    "status": "ok",
                    "timestamp": datetime.now(timezone.utc).isoformat(),
                },
            )
            return

        self._write_json(404, {"error": "not_found", "path": self.path})

    def log_message(self, format: str, *args: object) -> None:
        print(f"[{datetime.now(timezone.utc).isoformat()}] {format % args}")


def main() -> None:
    host = os.getenv("HOST", "127.0.0.1")
    port = int(os.getenv("PORT", "8000"))
    server = ThreadingHTTPServer((host, port), FoundationHandler)
    print(f"Python HTTP foundation listening on http://{host}:{port}")

    try:
        server.serve_forever()
    except KeyboardInterrupt:
        pass
    finally:
        server.server_close()


if __name__ == "__main__":
    main()
