restart: down up
install:
	cp .env.sample .env
up:
	docker-compose up -d --build
down:
	docker-compose down
