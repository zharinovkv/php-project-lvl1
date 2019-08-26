<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Game\game;

const MISSION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function run()
{
    $getQuestionAndCorrectAnswer = function () {
        
        $operand1 = rand(0, 9);
        $operand2 = rand(0, 9);
        $operator = OPERATORS[rand(0, count(OPERATORS) - 1)];

        $question = "$operand1 $operator $operand2";
        $correctAnswer;

        switch ($operator) {
            case '+':
                $correctAnswer = $operand1 + $operand2;
                break;
            case '-':
                $correctAnswer = $operand1 - $operand2;
                break;
            case '*':
                $correctAnswer = $operand1 * $operand2;
                break;
        }

        return [$question, $getQuestionAndCorrectAnswer];
    };

    game(MISSION, $playRound);
}
