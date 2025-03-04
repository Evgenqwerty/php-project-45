<?php

namespace BrainGames\Src;

use function cli\prompt;
use function cli\line;

function gameProcess(array $numbers, string $name, string $introduction): void
{
    line($introduction);
    foreach ($numbers as $question => $trueAnswer) {
        $askQuestion = line("Question: $question");
        $answer = prompt("Your answer");
        if ($answer !== $trueAnswer) {
            line("{$answer} is wrong answer ;(. Correct answer was {$trueAnswer}");
            line("Let's try again, {$name}!");
            return;
        }
        line('Correct!');
    }
    line("Congratulations, $name!");
}
