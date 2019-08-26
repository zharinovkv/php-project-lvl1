<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Game\game;

const MISSION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $getQuestionAndCorrectAnswer = function () {
        $question = rand(1, 100);
        $isPrime = isPrime($question, $i = 3);
        $correctAnswer =  $isPrime == true ? "yes" : "no";        
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
