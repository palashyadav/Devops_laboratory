# Simple Tasker

Small FastAPI service that exposes a `/reverse` endpoint to demonstrate a second dockerized service.

Run locally with:

```bash
cd simple_tasker
pip install -r requirements.txt
uvicorn app:app --reload --host 0.0.0.0 --port 8000
```

Or via docker-compose from repository root.
