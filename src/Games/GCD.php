<?php

namespace BrainGames\Src\Games;

use function BrainGames\Src\gameProcess;
use function BrainGames\Src\welcome;
use function cli\line;

function launchGCD()
{
        $name = welcome();
        SetGcd($name);
}
function getGCDBetween(int $a, int $b)
{
    while ($b != 0) {
        $m = $a % $b;
        $a = $b;
        $b = $m;
    }
    return $a;
}
function SetGcd(string $name)
{
    $introduction = 'Find the greatest common divisor of given numbers.';
    $numbers = [];
    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(0, 100);
        $number2 = rand(0, 100);
        $numbers["$number1 $number2"] = (string) getGCDBetween($number1, $number2);
    }
    gameProcess($numbers, $name, $introduction);
}
