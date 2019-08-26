<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Game\game;

const MISSION = 'What number is missing in the progression?';
const LENTH = 10;

function run()
{
    $getQuestionAndCorrectAnswer = function () {

        $start = rand(0, LENTH * 10);
        $step = rand(1, LENTH);
        $end = $start + (LENTH - 1) * $step;

        $progression = range($start, $end, $step);
        $hiddenElementIndex = rand(0, LENTH - 1);

        $correctAnswer = $progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = '..';
        $question = implode(" ", $progression);
        
        return [$question, $correctAnswer];
    };

    game(MISSION, $getQuestionAndCorrectAnswer);
}
