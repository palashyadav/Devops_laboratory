#!/usr/bin/env bash
set -euo pipefail

echo "Checking Flask service: http://localhost:5000/health"
curl -fsS http://localhost:5000/health || (echo "flask health failed"; exit 2)

echo "Checking Tasker service: http://localhost:8000/"
curl -fsS http://localhost:8000/ || (echo "tasker health failed"; exit 3)

echo "All services healthy"
