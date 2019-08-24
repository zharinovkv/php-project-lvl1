<?php

namespace BrainGames\Progression;

use function BrainGames\Game\game;

const MISSION = 'What number is missing in the progression?';
const LONG = 10;

function run()
{
    $playRound = function () {

        $start = rand(1, 100);
        $step = rand(1, 5);
        $end = $start + LONG * $step - $step;

        $progression = range($start, $end, $step);
        $indexOfTheHiddenElement = rand(0, count($progression) - 1);

        $roundAnswer = $progression[$indexOfTheHiddenElement];
        $progression[$indexOfTheHiddenElement] = '..';
        $question = implode(" ", $progression);
        
        return ['question' => $question, 'roundAnswer' => $roundAnswer];
    };

    game(MISSION, $playRound);
}
