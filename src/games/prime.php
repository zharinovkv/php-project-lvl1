<?php

namespace BrainGames\Prime;

use function BrainGames\Game\game;

const MISSION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $playRound = function () {

        $question = rand(1, 100);
        $isPrime = isPrime($question, $i = 3);
        $roundAnswer =  $isPrime == true ? "yes" : "no";
        
        return ['question' => $question, 'roundAnswer' => $roundAnswer];
    };

    game(MISSION, $playRound);
}

function isPrime($number)
{
    if ($number < 2) {
        return false;
    } elseif ($number == 2) {
        return true;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
    }
    return true;
}
