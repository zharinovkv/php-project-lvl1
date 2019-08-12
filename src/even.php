<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

function even()
{
    $counter = 1;
    line('Welcome to the Brain Game!' . "\n" . 'Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    while ($counter < 4) {
        $rand = rand();
        echo "Question: " . $rand . "\n";
        $res = $rand % 2;
        $answer = prompt('Your answer ');

        if ($res == 0 && $answer == "yes") {
            echo "Correct!" . "\n";
            $counter = $counter + 1;
        } elseif ($res == 1 && $answer == "no") {
            echo "Correct!" . "\n";
            $counter = $counter + 1;
        } elseif ($res == 0 && $answer == "no") {
            line("'no' is wrong answer ;(. Correct answer was 'yes'.\nLet's try again, %s!" . "\n", $name);
        } elseif ($res == 1 && $answer == "yes") {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, %s!" . "\n", $name);
        } else {
            line("%s is wrong answer ;(. \nLet's try again, %s!" . "\n", $answer, $name);
        }
    }
    line("Congratulations, %s!", $name);
}
