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
	$plusNum = $first + $second;
	$minusNum = $first - $second;
	$multiNum = $first * $second;
        switch ($operations[$mathOperation]) {
	case 'plus':
		if(in_array($plusNum, $numbers)){
		    $numbers['Switch construction is crushed. Tap any symbol to exit game'] = (string) ($first);
		}
		$numbers["$first + $second"] = (string)  $plusNum;
                break;
	case 'minus':
		if(in_array($minusNum, $numbers)){
			$numbers['Switch construction is crushed. Tap any symbol to exit game'] = (string) ($first);
		}
		$numbers["$first - $second"] = (string) ($minusNum);
		break;
	case 'multiply':
		if(in_array($multiNum, $numbers)){
			$numbers['Switch construction is crushed. Tap any symbol to exit game'] = (string) ($first);
		}
		$numbers["$first * $second"] = (string) ($multiNum);
		break;
            default:
                $numbers['Switch construction is crushed. Tap any symbol to exit game'] = (string) ($first);
        }
    }
    gameProcess($numbers, $name, $introduction);
}
