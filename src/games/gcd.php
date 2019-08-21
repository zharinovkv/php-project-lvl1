<?php

namespace BrainGames\Gcd;

use function BrainGames\Game\game;

const MISSION = 'Find the greatest common divisor of given numbers.';

function run()
{
    $play = function () {

        $min = 1;
        $max = 100;

        $first = rand($min, $max);
        $second = rand($min, $max);

        $question = "$first $second";
        $answerEngine = gcd($first, $second);

        return ['question' => $question, 'answerEngine' => $answerEngine];
    };

    game(MISSION, $play);
}

function gcd($first, $second)
{

    if ($first < $second) {
        [$first, $second] = [$second, $first];
    }

    if ($first % $second == 0) {
        return $second;
    } else {
        $first =  $first % $second;
        return gcd($first, $second);
    }
}
