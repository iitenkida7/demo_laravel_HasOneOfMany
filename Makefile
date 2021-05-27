init:
	docker-compose build
	docker-compose run --rm laravel composer install 
	cd laravel ; cp -i .env.local .env || true
	docker-compose run --rm laravel ./artisan migrate --seed
	docker-compose up
