<?php

/**
 * This function, given a sequence, returns its equilibrium indices (if any).
 *
 * I first thought about using the built in array_sum and array_slice functions, but they are slow on very large/long sequences.  Instead I decided on solving it with a few nested for loops.
 *
 * My first step was to figure out how to loop through the array, and seperate the numbers lower than the current index being tested into one set - and the numbers higher than the current index into another.  The "echo's" I left in the code helped me to verify that I was indeed looping through the array correctly, and hitting the correct indices each time through the loop.  I didn't check for all edge cases, but in the future I would add error handling to check if all elements in the given array are indeed integers.
 *
 * @param array $arr
 * @return array
 * @throws Exception If element in array is not an integer
 */
function getEquilibriums($arr) {
	$output = array();

	# the sum of both the low & high number groups are set to 0, at the start of the outer loop
  for($i = 0; $i < count($arr); $i++) {
    $low = 0;
    $high = 0;
		echo "\n\n** Loop #$i **\n";

		# Starting at the zero index of the array, this loop adds the sum of elements at lower indices
		for($x = 0; $x < $i; $x++) {
      $low += $arr[$x];
			echo "low: $x\n";
    }

		# Starting at the last index of the array, this loop adds the sum of elements at higher indices
    for($y = count($arr) - 1; $y > $i; $y--) {
      $high += $arr[$y];
			echo "high: $y\n";
    }

		# Checks if the sum of the high numbers is equal to the sum of the low numbers. If the sums are equal - the current index is confirmed as an equilibrium index.
    if($high === $low) {
      array_push($output,$i);
    }
  }

	# Prints message if no equilibrium indices are found
	if(count($output) == 0) {
		echo "\nNo equilibrium indices found";
		return;
	}
	return $output;
}

?>
