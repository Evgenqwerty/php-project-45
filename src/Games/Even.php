<?php

namespace BrainGames\Src\Games;

use function BrainGames\Src\gameProcess;
use function BrainGames\Src\welcome;
use function cli\line;

function launchEven()
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
    if(count($numbers) < 3){
	    $numbers = [];
	    $numbers['less than three values in the condition were obtained. Tap any symbol to exit game'] = (string) ('error');
    }
    gameProcess($numbers, $name, $introduction);
}
