<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Cli\welcomeUser;
use function BrainGames\Engine\gcd;
use function cli\line;
use function cli\prompt;

function playGame()
{

    $name = welcomeUser();

    line("Find the greatest common divisor of given numbers.");

    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);

        $correctAnswer = gcd($num1, $num2);

        line("Question: $num1 $num2");

        $userAnswer = prompt("Your answer");

        if ($userAnswer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            return;
        }
    }

    line("Congratulations, $name!");
}
