<?php

namespace BrainGames\Engine;

//constants
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
function generateExpression() {
    $num1 = rand(MIN_NUM, MAX_NUM);
    $num2 = rand(MIN_NUM, MAX_NUM);
    $operations = ['+', '-', '*'];
    $operation = $operations[array_rand($operations)];

    return [$num1, $num2, $operation];
}

// We calculate the result of the expression depending on the operation.
function calculateResult($num1, $num2, $operation) {
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

/*
 * Function for calculating the GCD
 * Implements the Euclidean algorithm for finding the GCD of two numbers.
 * It uses a loop for division and remainder.
*/
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
