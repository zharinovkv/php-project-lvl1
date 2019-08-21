<?php

namespace BrainGames\Prime;

use function BrainGames\Game\game;

const MISSION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $play = function () {

        $min = 1;
        $max = 100;

        $question = rand($min, $max);
        $answerEngine = isPrime($question, $i = 3);
        
        return ['question' => $question, 'answerEngine' => $answerEngine];
    };

    game(MISSION, $play);
}

function isPrime($number, $i)
{
    if ($number < 2) {
        return "no";
    } elseif ($number == 2) {
        return "yes";
    } elseif ($number % $i == 0) {
        return "no";
    } elseif ($i < $number / 2) {
        return isPrime($number, $i + 1);
    } else {
        return "yes";
    }
    return "yes";
}
