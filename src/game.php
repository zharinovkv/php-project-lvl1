<?php

namespace BrainGames\game;

use function \cli\line;
use function \cli\prompt;

const ROUNDS_COUNT = 3;

function game($mission, $getQuestionAndCorrectAnswer)
{
    line('Welcome to the Brain Game!' . PHP_EOL . $mission  . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($i = 1; $i <= ROUNDS_COUNT; $i++) {
        [$question, $correctAnswer] = $getQuestionAndCorrectAnswer();
        line("Question: %s", $question);

        $gamerAnswer = prompt('Your answer');

        if ($correctAnswer == $gamerAnswer) {
            line("Correct!");
            if ($i == 3) {
                line("Congratulations, {$name}!");
            }
        } else {
            line("'{$gamerAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'." .
            PHP_EOL . "Let's try again, {$name}!");
            break;
        }
    }
}
