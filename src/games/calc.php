<?php

namespace BrainGames\Calc;

use function BrainGames\Games\games;

function run()
{
    $gameRound = function () {
        
        $min = 0;
        $max = 9;
        
        $operand1 = rand($min, $max);
        $operand2 = rand($min, $max);
        
        $operators = ['+', '-', '*'];
        $operator = $operators[rand($min, count($operators) - 1)];
        
        $result = 0;
        $question = "$operand1 $operator $operand2";

        switch ($operator) {
            case '+':
                $result = $operand1 + $operand2;
                break;
            case '-':
                $result = $operand1 - $operand2;
                break;
            case '*':
                $result = $operand1 * $operand2;
                break;
        }

        return ['question' => $question, 'result' => $result];
    };

    $mission = 'What is the result of the expression?';
    games($mission, $gameRound);
}
