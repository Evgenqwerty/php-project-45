<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\conversation;
use function BrainGames\Cli\welcome;
use function cli\line;

function launchProgression()
{
        $name = welcome();
        setProgression($name);
}
function getProgression()
{
    $numers = [];
    for ($i = 0; $i < 3; $i++) {
        $arrProg = [];
        $iter = rand(1, 5);
        $quantity = rand(5, 10);
        $a = 0;
        $b = 0;
        for ($j = 1; $j < $quantity; $j++) {
            $val = $a + $iter;
            $b = $val;
            $a = $b;
            $arrProg[$val] = $val;
        }
        $quantity !== 10 ? $f = (10 - $quantity) * $iter : $f = 10 * $iter;
        $replacement = array($f => "..");
        $finalArrProg = array_replace($arrProg, $replacement);
        $key = implode(' ', $finalArrProg);
        $numers[$key] = (string) $f;
    }
        return $numers;
}
function setProgression(string $name)
{
    $introduction = 'What number is missing in the progression?';
    $numbers = getProgression();
    conversation($numbers, $name, $introduction);
}
