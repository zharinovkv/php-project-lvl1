<?php

namespace BrainGames\Gcd;

use function BrainGames\Games\games;

function run()
{
    $gameRound = function () {
        $rand1 = rand(1, 100);
        $rand2 = rand(1, 100);
        $question = "$rand1 и $rand2";
        $result = gmp_gcd($rand1, $rand2);
        return ['question' => $question, 'result' => $result];
    };
    $mission = 'Find the greatest common divisor of given numbers.';
    games($mission, $gameRound);
}
