const express = require('express');

function createApp() {
  const app = express();

  app.use(express.json());

  app.use((req, _res, next) => {
    console.log(`[${new Date().toISOString()}] ${req.method} ${req.path}`);
    next();
  });

  app.get('/', (_req, res) => {
    res.json({
      name: 'Engineering Foundations Node HTTP',
      purpose: 'Educational HTTP routing and health-check example',
    });
  });

  app.get('/api/info', (_req, res) => {
    res.json({
      runtime: 'Node.js',
      framework: 'Express',
      version: '1.0.0',
    });
  });

  app.get('/api/health', (_req, res) => {
    res.json({
      status: 'ok',
      uptimeSeconds: process.uptime(),
      timestamp: new Date().toISOString(),
    });
  });

  app.use((req, res) => {
    res.status(404).json({
      error: 'not_found',
      path: req.path,
    });
  });

  app.use((error, _req, res, _next) => {
    console.error(error);
    res.status(500).json({ error: 'internal_server_error' });
  });

  return app;
}

if (require.main === module) {
  const host = process.env.HOST || '127.0.0.1';
  const port = Number(process.env.PORT || 8000);

  createApp().listen(port, host, () => {
    console.log(`Node HTTP foundation listening on http://${host}:${port}`);
  });
}

module.exports = { createApp };
