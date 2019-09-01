<?php

namespace BrainGames\games\even;

use function BrainGames\game\game;

const MISSION = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    $getQuestionAndCorrectAnswer = function () {
        $question = rand();
        $correctAnswer = isEven($question) ? "yes" : "no";
        return [$question, $correctAnswer];
    };
    
    game(MISSION, $getQuestionAndCorrectAnswer);
}

function isEven($question)
{
    return $question % 2 == 0;
}
