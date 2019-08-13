<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

function calc()
{
    $counter = 1;
    $result = 0;
    line('Welcome to the Brain Game!' . "\n" . 'What is the result of the expression?');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    while ($counter < 4) {
        $rand1 = rand(1,10);
        $rand2 = rand(1,10);
        $znac = rand(1,3);
        $answer = 0;
        $result = 0;

        switch ($znac) {
            case 1:
                line("Question: %s + %s", $rand1, $rand2);
                $answer = prompt('Your answer: ');
                $result = $rand1 + $rand2;
                break;
            case 2:
                line("Question: %s - %s", $rand1, $rand2);
                $result = $rand1 - $rand2;
                $answer = prompt('Your answer: ');
                break;
            case 3:
                line("Question: %s * %s", $rand1, $rand2);
                $answer = prompt('Your answer: ');
                $result = $rand1 * $rand2;
                break;
        }
        if ($answer == $result) {
            echo "Correct!" . "\n";
            $counter = $counter + 1;
        } else {
            line("Question: %s * %s", $rand1, $rand2);
            line("Your answer: %s", $answer);
            line("%s is wrong answer ;(. Correct answer was: %s." . "\n" . "Let's try again,  %s!", $answer, $result, $name);
        }
    }
    line("Congratulations, %s!" . "\n", $name);
}
