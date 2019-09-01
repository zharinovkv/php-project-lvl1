<?php

namespace BrainGames\games\prime;

use function BrainGames\game\game;

const MISSION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $getQuestionAndCorrectAnswer = function () {
        $question = rand(1, 100);
        $correctAnswer = isPrime($question) ? "yes" : "no";
        return [$question, $correctAnswer];
    };

    game(MISSION, $getQuestionAndCorrectAnswer);
}

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }

    if ($number == 2) {
        return true;
    }
    
    if ($number > 2) {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
    }
    
    return true;
}
