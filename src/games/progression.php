<?php

namespace BrainGames\games\progression;

use function BrainGames\game\game;

const MISSION = 'What number is missing in the progression?';
const LENGTH = 10;

function run()
{
    $getQuestionAndCorrectAnswer = function () {

        $start = rand(0, 100);
        $step = rand(1, 10);
        $end = $start + (LENGTH - 1) * $step;

        $progression = range($start, $end, $step);
        $hiddenElementIndex = rand(0, LENGTH - 1);

        $correctAnswer = $progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = '..';
        $question = implode(" ", $progression);
        
        return [$question, $correctAnswer];
    };

    game(MISSION, $getQuestionAndCorrectAnswer);
}
