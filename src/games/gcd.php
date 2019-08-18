<?php

namespace BrainGames\Gcd;

use function BrainGames\Games\games;

function run()
{
    $gameRound = function () {

        $min = 1;
        $max = 100;

        $first = rand($min, $max);
        $second = rand($min, $max);

        $question = "$first и $second";
        $result = gmp_gcd($first, $second);

        return ['question' => $question, 'result' => $result];
    };

    $mission = 'Find the greatest common divisor of given numbers.';
    games($mission, $gameRound);
}
