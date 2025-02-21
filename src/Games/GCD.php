<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\engine;
use function BrainGames\Cli\welcome;
use function cli\line;

function brainSetGCD()
{
        $name = welcome();
        SetGcd($name);
}
function SetGcd($name)
{
    $introduction = 'Find the greatest common divisor of given numbers.';
    $numbers = [];
    function getGCDBetween($a, $b)
    {
        while ($b != 0) {
            $m = $a % $b;
            $a = $b;
            $b = $m;
        }
        return $a;
    }
    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(0, 100);
        $number2 = rand(0, 100);
        $numbers["$number1 $number2"] = (string) getGCDBetween($number1, $number2);
    }
    conversation($numbers, $name, $introduction);
}
