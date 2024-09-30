<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Cli\welcomeUser;
use function BrainGames\Engine\generateExpression;
use function BrainGames\Engine\calculateResult;
use function cli\line;
use function cli\prompt;

function calcGame()
{

    $name = welcomeUser();

    line('What is the result of the expression?');

    for ($i = 0; $i < 3; $i++) {
        list($num1, $num2, $operation) = generateExpression();
        $correctAnswer = calculateResult($num1, $num2, $operation);

        line("Question: $num1 $operation $num2");

        $userAnswer = prompt("Your answer");

        if ($userAnswer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            return;
        }
    }

    echo "Congratulations, $name!";
}
