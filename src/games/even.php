<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

use function BrainGames\Games\games;

function run()
{
    $gameRound = function () {

        $question = rand();
        $result = isEven($question);
        
        return ['question' => $question, 'result' => $result];
    };
    
    $mission = 'Answer "yes" if number even otherwise answer "no".';
    games($mission, $gameRound);
}

function isEven($question)
{
    return ($question % 2 == 0) ? "yes" : "no";
}
