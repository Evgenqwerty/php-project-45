<?php

namespace BrainGames\Src\Games;

use function BrainGames\Src\gameProcess;
use function BrainGames\Src\welcome;
use function cli\line;

function launchCalculate()
{
    $name = welcome();
    calculate($name);
}

function calculate(string $name)
{
    $introduction = 'What is the result of the expression?';
    $numbers = [];
    $operations = ['plus', 'minus', 'multiply'];
    $iterationNumber = 3;
    for ($i = 0; $i < $iterationNumber; $i++) {
        $first = rand(1, 100);
        $second =  rand(1, 100);
        $mathOperation = array_rand($operations);
        $plusNum = (string) ($first + $second);
        $minusNum = (string) ($first - $second);
        $multiNum = (string) ($first * $second);
        switch ($operations[$mathOperation]) {
            case 'plus':
                if (in_array($plusNum, $numbers, true)) {
                    $numbers['Switch construction is crushed. Tap any symbol to exit game'] = (string) ($first);
                }
                $numbers["$first + $second"] = $plusNum;
                break;
            case 'minus':
                if (in_array($minusNum, $numbers, true)) {
                    $numbers['Switch construction is crushed. Tap any symbol to exit game'] = (string) ($first);
                }
                $numbers["$first - $second"] = ($minusNum);
                break;
            case 'multiply':
                if (in_array($multiNum, $numbers, true)) {
                    $numbers['Switch construction is crushed. Tap any symbol to exit game'] = (string) ($first);
                }
                    $numbers["$first * $second"] = ($multiNum);
                break;
            default:
                $numbers['Switch construction is crushed. Tap any symbol to exit game'] = (string) ($first);
        }
    }
    gameProcess($numbers, $name, $introduction);
}
