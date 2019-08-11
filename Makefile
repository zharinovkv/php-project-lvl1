install:
	composer install
	phpcs install

lint:
	composer run-script phpcs -- --standard=PSR12 src bin
	