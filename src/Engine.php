<?php

namespace BrainGames\Engine;

const MIN_RANDOM_NUMBER = 1;
const MAX_RANDOM_NUMBER = 30;
const OPERATIONS =  ['+', '-', '*'];
const MAX_START =  20;
const MIN_STEP =  1;
const MAX_STEP =  5;
const MIN_LENGTH =  5;
const MAX_LENGTH =  10;

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
    $num1 = rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
    $num2 = rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);

    $operation = OPERATIONS[array_rand(OPERATIONS)];

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
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Function to generate progression and find missing number
function generateProgression()
{
    $start = rand(MIN_RANDOM_NUMBER, MAX_START);
    $step = rand(MIN_STEP, MAX_STEP);
    $length = rand(MIN_LENGTH, MAX_LENGTH);

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
