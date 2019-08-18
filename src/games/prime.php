<?php

namespace BrainGames\Prime;

use function BrainGames\Games\games;

function run()
{
    $gameRound = function () {

        $min = 1;
        $max = 100;

        $question = rand($min, $max);
        $result = isPrime($question);

        return ['question' => $question, 'result' => $result];
    };

    $mission = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    games($mission, $gameRound);
}

function isPrime($number)
{
    if ($number == 2) {
        return "yes";
    }

    if ($number % 2 == 0) {
        return "no";
    }

    $i = 3;
    $maxFactor = (int)sqrt($number);
    while ($i <= $maxFactor) {
        if ($number % $i == 0) {
            return "no";
        }
        $i += 2;
    }
    return "yes";
}
