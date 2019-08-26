<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Game\game;

const MISSION = 'Find the greatest common divisor of given numbers.';

function run()
{
    $getQuestionAndCorrectAnswer = function () {

        $first = rand(1, 100);
        $second = rand(1, 100);

        $question = "$first $second";
        $correctAnswer = getGcd($first, $second);

        return [$question, $correctAnswer];
    };

    game(MISSION, $getQuestionAndCorrectAnswer);
}

function getGcd($firstNum, $secondNum)
{
    $first;
    $second;

    if ($firstNum < $secondNum) {
        [$first, $second] = [$secondNum, $firstNum];
    } else {
        [$first, $second] = [$firstNum, $secondNum];
    }

    if ($first % $second == 0) {
            return $second;
    } else {
        $first =  $first % $second;
        return getGcd($first, $second);
    }
}
