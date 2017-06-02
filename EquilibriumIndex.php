<?php

namespace Booj\CodeTest;

/**
 * This function ...
 *
 * @param $input array to
 * @return array
 */
function getEquilibriums(array $input) {
    $solution = [];
    $index = 0;
    $sumLeft = 0;
    $sumRight = array_sum($input);
    $valuePrevious = 0;

    foreach (array_values($input) as $value) {
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
 * The edge cases for this problem include consideration for the processing the beginning and the end
 * of the input array.  It soon becomes apparent that the given definition of "an equilibrium index" does
 * not consider the array edge case indicies; that is, should the sum of the non-existent elements that
 * are to the left of index 0 be considered as summing to zero?  In the spirit of PHP, since the non-existent
 * array values can be considered as null, and adding a null values is equivalent to adding a zero integer,
 * we can include the first and last indicies to our solution.
 *     null [0, 1, 2, 3, ... N-1, N] null
 *
 * Typically for array problems, coding the array indexing correctly can be tricky.
 */
