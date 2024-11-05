setup:
	@make build
	@make up
	@make composer-update

build:
	docker compose build --force-rm

stop:
	docker compose stop

up:
	docker compose up -d

composer-update:
	@echo "Running Composer update on laravel-docker container..."
	@if docker ps -q -f name=laravel-docker; then \
        docker exec laravel-docker bash -c "composer update"; \
    else \
        echo "Container laravel-docker is not running"; \
    fi

data:
	@if docker ps -q -f name=laravel-docker; then \
        docker exec laravel-docker bash -c "php artisan migrate"; \
        docker exec laravel-docker bash -c "php artisan db:seed"; \
    else \
        echo "Container laravel-docker is not running"; \
    fi
