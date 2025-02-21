<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\conversation;
use function BrainGames\Cli\welcome;
use function cli\line;

function greetingPrime()
{
    $name = welcome();
    setPrime($name);
}
function setPrime(string $name)
{
    $introduction = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $primeNums = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
    $numbers = [];
    for ($i = 0; $i < 3; $i++) {
        $number = rand(0, 100);
        $number == in_array($number, $primeNums) ? $numbers[$number] = 'yes' : $numbers[$number] = 'no';
    }
    conversation($numbers, $name, $introduction);
}
