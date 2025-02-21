<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\engine;
use function BrainGames\Cli\welcome;
use function cli\line;

function brainCalculate()
{
    $name = welcome();
    calculate($name);
}

function calculate($name)
{
    $introduction = 'What is the result of the expression?';
    $numbers = [];
    $quantityMathCases = 3;
    for ($i = 0; $i < $quantityMathCases; $i++) {
        $first = rand(1, 100);
        $second =  rand(1, 100);
        switch (rand(1, $quantityMathCases)) {
            case 1:
                $numbers["$first + $second"] = (string)  ($first + $second);
                break;
            case 2:
                $numbers["$first - $second"] = (string) ($first - $second);
                break;
            case 3:
                $numbers["$first * $second"] = (string) ($first * $second);
                break;
        }
    }

    conversation($numbers, $name, $introduction);
}
