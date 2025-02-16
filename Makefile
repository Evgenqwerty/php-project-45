#Makefile
install: # устанавливаем зависимости
	composer install

brain-games: # запускаем приветствие
	bin/brain-games

brain-even: # игра четное-нечетное
	bin/brain-even

brain-calc: # играем в калькулятор
	bin/brain-calc

brain-gcd: #наибольший общий делитель
	bin/brain-gcd

brain-progression: #заполни недостающее значение в прогрессии
	bin/brain-progression

prime: #простое ли число?
	bin/brain-prime

validate: # валидация composer
	composer validate

lint: 
	composer exec --verbose phpcs -- --standard=PSR12 src bin
