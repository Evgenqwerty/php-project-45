<?php

namespace BrainGames\Cli;

require_once __DIR__ . '/../vendor/autoload.php';

use function cli\prompt;
use function cli\line;

function engine(array $numbers, string $name, string $introduction):void
{
    line($introduction);
    foreach ($numbers as $question => $number) {
        $answer = prompt("Question: $question\nYour answer");
        if ($answer !== $number) {
		line("{$answer} is wrong answer ;(. Correct answer was {$number}");
			line("Let's try again, {$name}!");
            return;
        } else {
            line('Correct!');
        }
    }
    line("Congratulations, $name!");
}
