<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Cli\welcomeUser;
use function BrainGames\Engine\generateProgression;
use function cli\line;
use function cli\prompt;

function playGame()
{

    $name = welcomeUser();
    line("What number is missing in the progression?");

    for ($i = 0; $i < 3; $i++) {
        [$progression, $hiddenNumber] = generateProgression();

        line("Question: " . implode(' ', $progression) . "");

        $userAnswer = prompt("Your answer");

        if ((int)$userAnswer === (int)$hiddenNumber) {
            line("Correct!");
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$hiddenNumber'.");
            line("Let's try again, $name!");
            return;
        }
    }

    line("Congratulations, $name!");
}
