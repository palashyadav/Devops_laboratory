# Devops Laboratory

Small demo Dockerized Flask app used to exercise basic devops workflows: build image, run container, healthchecks, and small CI.

Quick start:

1. Build image: `make build`
2. Run locally: `make run` (or `docker-compose up --build`)
3. Health: `curl http://localhost:5000/health`

Examples:

- Run with Docker Compose:

	```bash
	docker-compose up --build
	curl http://localhost:5000/health
	```

- Use `curl` to POST JSON to `/echo`:

	```bash
	curl -X POST -H "Content-Type: application/json" -d '{"hello":"world"}' http://localhost:5000/echo
	```

Running tests:

1. Install dev deps and run tests for `simple_tasker`:

```bash
make test
```

2. Use the health check helper after bringing services up:

```bash
./scripts/check_health.sh
```

Services overview:

- **Flask web**: basic echo and health endpoints (port 5000)
- **FastAPI tasker**: reverse string endpoint (port 8000)
- **PHP service**: status and ping endpoints (port 9000)
