<?php

namespace Booj\CodeTest;

/**
 * This function returns a solution array of "equilibrium indexes" for the input array.
 *
 * An equilibrium index is described in the Booj codetest README.md file.
 * The solution array that this function returns can additionally contain the 0 and N-1 array indicies
 * (where N is the size of the input array).  See comments below the function for additional details.
 *
 * @param $input array to solve
 * @return array
 * @throws \Exception
 */
function getEquilibriums(array $input) {
    $solution = [];
    $index = 0;
    $sumLeft = 0;
    $sumRight = array_sum($input);
    $valuePrevious = 0;

    foreach (array_values($input) as $value) {
        // validate input array values; only integer and null types are allowed
        if (!(is_int($value) || is_null($value))) {
            throw new \Exception("Invalid array value");
        }
        $sumLeft += $valuePrevious;
        $sumRight -= $value;
        if ($sumLeft === $sumRight) {
            $solution[] = $index; // add equilibrium index to solution
        }
        $valuePrevious = $value;
        $index++;
    }

    return $solution;
}

/*
 * The Booj Code Test as solved by Jeff Sheffel (github.com/jscodefix, jeff@sheffel.org)
 *
 * My first thought was to create an elegant and complete solution to this simple code challenge.
 * Some considerations are input validation, performance, and edge cases.
 *
 * The edge cases for this problem include consideration for the processing the beginning and the end
 * of the input array.  It soon becomes apparent that the given definition of "an equilibrium index" does
 * not consider the array edge case indicies; that is, should the sum of the non-existent elements that
 * are to the left of index 0 be considered as summing to zero?
 *
 * In the spirit of PHP, since the non-existent array values can be considered as null, and adding a
 * null value is equivalent to adding a zero integer, we can include the first and last indicies to
 * our solution.  Visualize the array as something like:
 *     null [0, 1, 2, 3, ... N-1, N] null
 * The elegance of this approach is, that the solution extends the usual or expected equilibrium solution;
 * in other words, it extends the solution that never includes the 0 or N-1 indicies.
 *
 * Typically for array coding problems, correctly coding the array indexing can be tricky.  I decided to
 * use a foreach() loop, instead of a for() loop.
 *
 * This code was tested against PHP 7.0.18 (cli) and phpunit 6.1 on Ubuntu Linux.
 */
