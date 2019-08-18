<?php

namespace BrainGames\Progression;

use function BrainGames\Games\games;

function run()
{
    $gameRound = function () {

        $min = 0;
        $max = 18;
        $step = 2;
        
        $progression = range($min, $max, $step);

        $index = rand($min, $max / $step);
        $result = $progression[$index];

        $progression[$index] = '..';
        $question = implode(" ", $progression);
        
        return ['question' => $question, 'result' => $result];
    };

    $mission = 'What number is missing in the progression?';
    games($mission, $gameRound);
}
