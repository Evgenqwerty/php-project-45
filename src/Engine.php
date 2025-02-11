<?php
namespace BrainGames\Cli;

require_once __DIR__ . '/../vendor/autoload.php';

use function cli\prompt;
use function cli\line;

function engine($numbers, $name){
	foreach($numbers as $key => $value){
		$answer = prompt("Question: $key\nYour answer");
		if ($answer !== $value){line("'$answer' is wrong answer ;(. Correct answer was '$value'\nLets try again $name!");return;}
		else{line('Correct!');}
	}
	line("Congratulations, $name!");
}
