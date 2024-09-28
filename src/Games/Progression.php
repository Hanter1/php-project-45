<?php
namespace BrainGames\Games\Progression;

use function BrainGames\Cli\welcomeUser;
use function BrainGames\Engine\generateProgression;
use function cli\line;
use function cli\prompt;

function playGame() {

    $name = welcomeUser();
    line("What number is missing in the progression?\n");

    for ($i = 0; $i < 3; $i++) {
        [$progression, $hiddenNumber] = generateProgression();

        line("Question: " . implode(' ', $progression) . "\n");

        $userAnswer = prompt("Your answer");

        if ($userAnswer == $hiddenNumber) {
            line("Correct!\n");
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$hiddenNumber'.\n");
            line("Let's try again, $name!\n");
            return;
        }
    }

    line("Congratulations, $name!\n");
}
