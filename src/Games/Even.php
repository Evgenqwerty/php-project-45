<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\conversation;
use function BrainGames\Cli\welcome;
use function cli\line;

function greetingEven()
{
    $name = welcome();
    setEven($name);
}

function setEven(string $name)
{
    $introduction = 'Answer "yes" if the number is even, otherwise answer "no".';
    $numbers = [];
    for ($i = 0; $i < 3; $i++) {
            $number = rand(0, 100);
        if ($number % 2 == 0) {
            $numbers[$number] = 'yes';
        } else {
                $numbers[$number] = 'no';
        }
    }
    conversation($numbers, $name, $introduction);
}
