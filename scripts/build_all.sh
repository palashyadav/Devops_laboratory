#!/usr/bin/env bash
set -euo pipefail

docker-compose build --no-cache
echo "All images built successfully"
