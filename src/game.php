<?php

namespace BrainGames\Game;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_ROUNDS = 3;

function game($mission, $play)
{
    line('Welcome to the Brain Game!' . PHP_EOL . $mission  . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($i = 1; $i <= NUMBER_OF_ROUNDS; $i++) {
        ['question' => $question, 'answerEngine' => $answerEngine] = $play();
        line("Question: %s", $question);

        $answerGamer = prompt('Your answer');

        if ($answerEngine == $answerGamer) {
            line("Correct!");
        } else {
            $i = 0;
            line("'{$answerGamer}' is wrong answer ;(. Correct answer was '{$answerEngine}'." .
            PHP_EOL . "Let's try again, {$name}!");
        }
    }
    
    line("Congratulations, {$name}!");
}
