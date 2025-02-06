#Makefile
install: # устанавливаем зависимости
	composer install

brain-games: # запускаем приветствие
	bin/brain-games

validate: # валидация composer
	composer validate

lint: 
	composer exec --verbose phpcs -- --standard=PSR12 src bin
