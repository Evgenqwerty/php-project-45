<?php

namespace BrainGames\Src\Games;

use function BrainGames\Src\gameProcess;
use function BrainGames\Src\welcome;
use function cli\line;

function launchProgression()
{
        $name = welcome();
        setProgression($name);
}

function getNumbers()
{
    $numbers = [];
    $resultNumbers = [];
    $start = rand(5, 10);
    $step = rand(1, 5);
    $maxNumber = rand(5, 10);
    $a = 0;
    for ($i = 0; $i <= $maxNumber; $i++) {
        $val = $a + $step;
        $b = $val;
        $a = $b;
        $numbers[$i] = $val;
    }  // Получили массив N чисел в последовательности от start и с шагом step

    $positionToReplace = rand(0, $maxNumber);
    $answer = $numbers[$positionToReplace];  // Сохранили число для замены (ответ) в переменную
    $numbers[$positionToReplace] = '..';  // Заменяем в массиве-последовательности рандомное число на '..'
    $question = implode(' ', $numbers);
    $resultNumbers[] = $question;
    $resultNumbers[] = $answer;
    return $resultNumbers;
}

function getProgression()
{
    $resultArr = [];
    $maxIteration = 3;
    for ($i = 0; $i < $maxIteration; $i++) {
        $a = getNumbers();
        $b = (string) $a[0];
        $c = (string) $a[1];
        $resultArr[$b] = $c;
    }
    return $resultArr;
}

function setProgression(string $name)
{
    $introduction = 'What number is missing in the progression?';
    $numbers = getProgression();
    gameProcess($numbers, $name, $introduction);
}
