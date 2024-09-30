<?php

namespace BrainGames\Engine;

// Checking the parity of a number
function isEvenNumber(int $num)
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
    $num1 = rand(1, 30);
    $num2 = rand(1, 30);
    $operations = ['+', '-', '*'];
    $operation = $operations[array_rand($operations)];

    return [$num1, $num2, $operation];
}

// We calculate the result of the expression depending on the operation.
function calculateResult(int $num1, int $num2, string $operation)
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

/*
 * Function for calculating the GCD
 * Implements the Euclidean algorithm for finding the GCD of two numbers.
 * It uses a loop for division and remainder.
*/
function gcd(int $a, int $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Function to generate progression and find missing number
function generateProgression()
{
    $start = rand(1, 20);
    $step = rand(1, 5);
    $length = rand(5, 10);

    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }

    // Selecting a random position for the missing number
    $hiddenIndex = rand(0, $length - 1);
    $hiddenNumber = $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';

    return [$progression, $hiddenNumber];
}

// Function to check if a number is prime
function isPrime(int $number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Function to generate a random number
function generateRandomNumber(int $min, int $max)
{
    return rand($min, $max);
}
