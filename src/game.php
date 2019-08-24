<?php

namespace BrainGames\Game;

use function \cli\line;
use function \cli\prompt;

const ROUNDS_COUNT = 3;

function game($mission, $playRound)
{
    line('Welcome to the Brain Game!' . PHP_EOL . $mission  . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        ['question' => $question, 'roundAnswer' => $roundAnswer] = $playRound();
        line("Question: %s", $question);

        $gamerAnswer = prompt('Your answer');

        if ($roundAnswer == $gamerAnswer) {
            line("Correct!");
        } else {
            $i = 0;
            line("'{$gamerAnswer}' is wrong answer ;(. Correct answer was '{$roundAnswer}'." .
            PHP_EOL . "Let's try again, {$name}!");
        }
    }
    
    line("Congratulations, {$name}!");
}
