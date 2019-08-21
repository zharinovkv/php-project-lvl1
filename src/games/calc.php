<?php

namespace BrainGames\Calc;

use function BrainGames\Game\game;

const MISSION = 'What is the result of the expression?';

function run()
{
    $play = function () {
        
        $min = 0;
        $max = 9;
        
        $operand1 = rand($min, $max);
        $operand2 = rand($min, $max);
        
        $operators = ['+', '-', '*'];
        $operator = $operators[rand($min, count($operators) - 1)];
        
        $answerEngine = 0;
        $question = "$operand1 $operator $operand2";

        switch ($operator) {
            case '+':
                $answerEngine = $operand1 + $operand2;
                break;
            case '-':
                $answerEngine = $operand1 - $operand2;
                break;
            case '*':
                $answerEngine = $operand1 * $operand2;
                break;
        }

        //var_dump($question);

        return ['question' => $question, 'answerEngine' => $answerEngine];
    };

    game(MISSION, $play);
}
