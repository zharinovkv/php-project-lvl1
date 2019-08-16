<?php

namespace BrainGames\Progression;

use function BrainGames\Games\games;

function run()
{
    $gameRound = function () {

        $progression = range(0, 18, 2);
        $rand = rand(0, 9);
        $result = $progression[$rand];
        $progression[$rand] = '..';
        $question = implode(" ", $progression);
        return ['question' => $question, 'result' => $result];
    };
    $mission = 'What number is missing in the progression?';
    games($mission, $gameRound);
}
