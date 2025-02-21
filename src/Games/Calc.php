<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\conversation;
use function BrainGames\Cli\welcome;
use function cli\line;

function greetingCalculate()
{
    $name = welcome();
    calculate($name);
}

function calculate(string $name)
{
    $introduction = 'What is the result of the expression?';
    $numbers = [];
    $arrOperations = ['plus', 'minus', 'multiply'];
    for ($i = 0; $i < 3; $i++) {
        $first = rand(1, 100);
        $second =  rand(1, 100);
        $mathOperation = array_rand($arrOperations);
        switch ($arrOperations[$mathOperation]) {
            case 'plus':
                $numbers["$first + $second"] = (string)  ($first + $second);
                break;
            case 'minus':
                $numbers["$first - $second"] = (string) ($first - $second);
                break;
            case 'multiply':
                $numbers["$first * $second"] = (string) ($first * $second);
                break;
            default:
                $numbers['Switch construction is crushed. Tap any symbol to exit game'] = (string) ($first);
        }
    }
    conversation($numbers, $name, $introduction);
}
