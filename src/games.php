<?php

namespace BrainGames\Games;

use function \cli\line;
use function \cli\prompt;

function games($mission, $gameRound)
{
    line('Welcome to the Brain Game!' . PHP_EOL . $mission  . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($i = 1; $i < 4; $i++) {
        $questionAndResult = $gameRound();
        line("Question: %s", getQuestion($questionAndResult));
        $answer = prompt('Your answer');
        $result = getResult($questionAndResult);

        if ($result == $answer) {
            line("Correct!");
        } else {
            $i = 0;
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'." .
            PHP_EOL . "Let's try again, {$name}!");
        }
    }
    line("Congratulations, {$name}!");
}

function getResult($questionAndResult)
{
    return $questionAndResult['result'];
}

function getQuestion($questionAndResult)
{
    return $questionAndResult['question'];
}
