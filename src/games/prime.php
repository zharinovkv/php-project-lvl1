<?php

namespace BrainGames\Prime;

use function BrainGames\Games\games;

function run()
{
    $gameRound = function () {

        $rand = rand(0, 99);
        $isPrime = isPrime($rand);
        $result = result($isPrime);
        return ['question' => $rand, 'result' => $result];
    };
    $mission = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    games($mission, $gameRound);
}


function isPrime($number)
{
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }

    $i = 3;
    $maxFactor = (int)sqrt($number);
    while ($i <= $maxFactor) {
        if ($number % $i == 0) {
            return false;
        }
        $i += 2;
    }
    return true;
}

function result($isPrime)
{
    return ($isPrime == true) ? "yes" : "no";
}
