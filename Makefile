.PHONY: install
install:
	docker run --rm -v ${PWD}:/app composer install --ignore-platform-reqs --no-dev

.PHONY: up
up:
	docker-compose up
