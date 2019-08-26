<?php

namespace BrainGames\Games\Even;
use function BrainGames\Game\game;

const MISSION = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    $getQuestionAndCorrectAnswer = function () {
        $question = rand();
        $correctAnswer = (isEven($question) == true) ? "yes" : "no";
        return [$question, $correctAnswer];
    };
    
    game(MISSION, $getQuestionAndCorrectAnswer);
}

function isEven($question)
{
    return $question % 2 == 0;
}
