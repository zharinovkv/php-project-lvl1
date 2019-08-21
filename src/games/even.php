<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

use function BrainGames\Game\game;

const MISSION = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    $play = function () {

        $question = rand();
        $isEven = isEven($question);
        $answerEngine = answerEngine($isEven);
        
        return ['question' => $question, 'answerEngine' => $answerEngine];
    };
    
    game(MISSION, $play);
}

function isEven($question)
{
    return ($question % 2 == 0) ? true : false;
}

function answerEngine($isEven)
{
    return $isEven == true ? "yes" : "no";
}
