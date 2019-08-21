<?php

namespace BrainGames\Progression;

use function BrainGames\Game\game;

const MISSION = 'What number is missing in the progression?';

function run()
{
    $play = function () {

        $start = 0;
        $end = 18;
        $step = 2;
        
        $progression = range($start, $end, $step);
        $itenIndexForQuestion = rand($start, $end / $step);

        $answerEngine = $progression[$itenIndexForQuestion];
        $progression[$itenIndexForQuestion] = '..';
        $question = implode(" ", $progression);
        
        return ['question' => $question, 'answerEngine' => $answerEngine];
    };

    game(MISSION, $play);
}
