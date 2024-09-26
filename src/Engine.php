<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

//constants
const COUNT_ROUNDS = 3;
const MIN_NUM = 1;
const MAX_NUM = 30;


// Checking the parity of a number
function isEvenNumber($num):string
{
    if ($num % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}

// We generate a random mathematical expression with two numbers and one of three operations.
function generateExpression()
{
    $num1 = rand(MIN_NUM, MAX_NUM);
    $num2 = rand(MIN_NUM, MAX_NUM);
    $operations = ['+', '-', '*'];
    $operation = $operations[array_rand($operations)];

    return [$num1, $num2, $operation];
}

// We calculate the result of the expression depending on the operation.
function calculateResult($num1, $num2, $operation)
{
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            return null;
    }
}