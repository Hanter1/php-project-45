<?php
namespace BrainGames\Games\Prime;

use function BrainGames\Cli\welcomeUser;
use function BrainGames\Engine\generateRandomNumber;
use function BrainGames\Engine\isPrime;
use function cli\line;
use function cli\prompt;

function playGame() {
    $name = welcomeUser();

    line( "Answer 'yes' if given number is prime. Otherwise answer 'no'.\n");

    for ($i = 0; $i < 3; $i++) {
        $number = generateRandomNumber(1, 100);
        $correctAnswer = isPrime($number) ? 'yes' : 'no';

        // Выводим вопрос
        line("Question: $number\n");

        $userAnswer = prompt("Your answer");

        if ($userAnswer === $correctAnswer) {
            line("Correct!\n");
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.\n");
            line("Let's try again, $name!\n");
            return;
        }
    }

    line("Congratulations, $name!\n");
}