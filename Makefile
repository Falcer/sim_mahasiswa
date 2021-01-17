run: 
	docker-compose up -d --build site
artisan:
	@docker-compose run --rm artisan $$ARGS