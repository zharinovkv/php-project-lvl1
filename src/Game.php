<?php

namespace BrainGames\Game;

use function \cli\line;
use function \cli\prompt;

const ROUNDS_COUNT = 3;

function game($mission, $getQuestionAndCorrectAnswer)
{
    line('Welcome to the Brain Game!' . PHP_EOL . $mission  . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($i = 1; $i <= ROUNDS_COUNT;) {
        [$question, $correctAnswer] = $getQuestionAndCorrectAnswer();
        line("Question: %s", $question);

        $gamerAnswer = prompt('Your answer');

        if ($correctAnswer == $gamerAnswer) {
            $i = $i + 1;
            line("Correct!");
        }
        
        if ($correctAnswer != $gamerAnswer) {
            $i = 1;
            line("'{$gamerAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'." .
            PHP_EOL . "Let's try again, {$name}!");
        }
    }
    
    line("Congratulations, {$name}!");
}
