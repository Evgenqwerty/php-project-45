#Makefile
install: # устанавливаем зависимости
	composer install

brain-games: # запускаем приветствие
	bin/brain-games

brain-even: # игра четное-нечетное
	bin/brain-even

brain-calc: # играем в калькулятор
	bin/brain-calc

validate: # валидация composer
	composer validate

lint: 
	composer exec --verbose phpcs -- --standard=PSR12 src bin
