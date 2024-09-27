<?php
namespace BrainGames\Games\Parity;

use function BrainGames\Cli\welcomeUser;
use function BrainGames\Engine\isEvenNumber;
use function cli\line;
use function cli\prompt;

function ParityCheckGame() {

    $name = welcomeUser();

    line('Answer "yes" if the number is even, otherwise answer "no".');
    $correctAnswersCount = 0;
    for ($i = 1; $i <= 3; $i++)
    {
        $randomNumber = rand(1, 100);

        line("Question: $randomNumber");
        $answer = prompt("Your answer: ");
        $correctAnswer = isEvenNumber($randomNumber);

        if ($answer === $correctAnswer) {
            $correctAnswersCount += 1;
            line("Correct!");
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was $correctAnswer.\nLet's try again, $name!");
            break;
        }
    }
    if ($correctAnswersCount === 3) {
        line("Congratulations, $name!");
    }
}
