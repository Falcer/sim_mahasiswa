run: 
	docker-compose up -d --build site
migrateseed:
	docker-compose run --rm artisan migrate:refresh --seed