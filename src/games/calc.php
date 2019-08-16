<?php

namespace BrainGames\Calc;

use function BrainGames\Games\games;

function run()
{
    $gameRound = function () {
        $rand1 = rand(0, 9);
        $rand2 = rand(0, 9);
        $operand = rand(1, 3);
        $result = 0;
        $question = "";

        switch ($operand) {
            case 1:
                $result = $rand1 + $rand2;
                $question = "$rand1 + $rand2";
                break;
            case 2:
                $result = $rand1 - $rand2;
                $question = "$rand1 - $rand2";
                break;
            case 3:
                $result = $rand1 * $rand2;
                $question = "$rand1 * $rand2";
                break;
        }
        return ['question' => $question, 'result' => $result];
    };
    $mission = 'What is the result of the expression?';
    games($mission, $gameRound);
}
