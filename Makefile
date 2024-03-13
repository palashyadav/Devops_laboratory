IMAGE_NAME=devops-lab

.PHONY: build run test clean

build:
	docker build -t $(IMAGE_NAME):latest .

run:
	docker run --rm -p 5000:5000 $(IMAGE_NAME):latest

clean:
	docker rmi $(IMAGE_NAME):latest || true

compose-build:
	docker-compose build

test:
	# Run unit tests for simple services
	python -m pip install --upgrade pip
	python -m pip install -r simple_tasker/requirements.txt
	python -m pip install pytest
	pytest simple_tasker/tests
