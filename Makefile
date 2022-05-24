start:
	php -S localhost:8000 -t public
	
install:
	composer install

migrate:
	php bin/Migrate.php

lint:
	composer exec phpcs -v -- --standard=PSR12 src public -np