<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

use function BrainGames\Games\games;

function run()
{
    $gameRound = function () {
        $rand = rand();
        $isEven = isEven($rand);
        return ['question' => $rand, 'result' => $isEven];
    };
    $mission = 'Answer "yes" if number even otherwise answer "no".';
    games($mission, $gameRound);
}

function isEven($rand)
{
    return ($rand % 2 == 0) ? "yes" : "no";
}
