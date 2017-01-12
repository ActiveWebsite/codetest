<?php
/*
 * Find all equilibrium indices if any. Try to avoid nested loops if possible.
 * It could be done with nested loops by adding up each left and right sum at
 * each step through the array, but that yields a big-O of O(N^2). We can do
 * better than that. Unnested, we stay at 2n or O(N).
 *
 * @param array $arr
 * @return array Array of equilibrium indices
 */
function getEquilibriums(array $arr)
{
    $output = [];
    $rightSum = 0;
    $leftSum = 0;

    // count them all up.
    foreach ($arr as $val) {
        $rightSum += $val;
    }

    // now move them over and compare.
    foreach ($arr as $i => $val) {
        // moving the pile here.
        $rightSum -= $val;

        // now compare the piles. Note we don't add to the left sum yet b/c we
        // are standing on our index. Think of it as our viewing point. While
        // we're standing on it, we can only survey those values on either side
        // of us.
        if ($rightSum == $leftSum) {
            $output[] = $i;
        }

        // step off the viewing point and move it to the other side in prep for
        // our next iteration.
        // $leftSum += $val;
    }

    return $output;
}