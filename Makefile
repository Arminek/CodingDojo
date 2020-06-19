install:
	docker-compose run --rm composer composer install

ssh-php:
	docker-compose run --rm php bash

ssh-composer:
	docker-compose run --rm composer bash

test-behat:
	docker-compose run --rm php bin/behat

test-phpunit:
	docker-compose run --rm php bin/phpunit

test-phpspec:
	docker-compose run --rm php bin/phpspec run

test: test-phpspec test-phpunit test-behat
