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

    for ($i = 0; $i < 3; $i++) {
        list($num1, $num2, $operation) = generateExpression();
        $correctAnswer = calculateResult($num1, $num2, $operation);

        line( "Question: $num1 $operation $num2\n");

        $userAnswer = prompt("Your answer: ");

        if ($userAnswer == $correctAnswer) {
            line("Correct!\n");
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.\n");
            line("Let's try again, $name!\n");
            return;
        }
    }

    echo "Congratulations, $name!\n";
}