<?php

namespace BrainGames\Calc;

use function BrainGames\Game\game;

const MISSION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function run()
{
    $playRound = function () {
        
        $operand1 = rand(0, 9);
        $operand2 = rand(0, 9);
        $operator = OPERATORS[rand(0, count(OPERATORS) - 1)];

        $question = "$operand1 $operator $operand2";
        $roundAnswer;

        switch ($operator) {
            case '+':
                $roundAnswer = $operand1 + $operand2;
                break;
            case '-':
                $roundAnswer = $operand1 - $operand2;
                break;
            case '*':
                $roundAnswer = $operand1 * $operand2;
                break;
        }

        return ['question' => $question, 'roundAnswer' => $roundAnswer];
    };

    game(MISSION, $playRound);
}
