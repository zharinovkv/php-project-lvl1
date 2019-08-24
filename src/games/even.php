<?php

namespace BrainGames\Even;
use function BrainGames\Game\game;

const MISSION = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    $playRound = function () {

        $question = rand();
        $isEven = isEven($question);
        $roundAnswer = $isEven == true ? "yes" : "no";
        
        return ['question' => $question, 'roundAnswer' => $roundAnswer];
    };
    
    game(MISSION, $playRound);
}

function isEven($question)
{
    return $question % 2 == 0;
}
