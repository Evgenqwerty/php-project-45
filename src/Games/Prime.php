<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\gameProcess;
use function BrainGames\Cli\welcome;
use function cli\line;

function launchPrime()
{
    $name = welcome();
    setPrime($name);
}
function isPrime(int $number)
{
    if ($number <= 1) {
            return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
function setPrime(string $name)
{
    $introduction = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $numbers = [];
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        $number == isPrime($number) ? $numbers[$number] = 'yes' : $numbers[$number] = 'no';
    }
    gameProcess($numbers, $name, $introduction);
}
