<?php
/*
 * Drew Henry (drewhenr@usc.edu)
 * 
 * To verify an equilibrium index we will need to sum the entire
 * array at least once so start by doing this and storing the result
 * in a variable. Once we have the initial sum we need only perform
 * two addition operations and one comparison operation per index
 * giving us a total O(n) operations. By placing the sum comparison
 * between the sum updates we avoid the need for extra storage
 * variables and require only a simple foreach loop over the array.
 * 
 * Note that this code does not attempt to validate input and will
 * work without throwing any errors as long as an array is given
 * with numeric or numeric convetable (e.g. true, null, '0', etc.)
 * values.
 */

/**
 * Finds and returns the equilibrium indices of the provided array.
 *
 * @param int[] $arr Array of integers to be checked.
 *
 * @return int[] Array of equilibrium indices.
 */
function getEquilibriums(array $arr) {
	$output = [];
	
	# Set the initial sums
	$sum_l = 0;
	$sum_r = array_sum($arr);
	
	# Iterate over all indices
	foreach($arr as $k=>$v){
		# Remove the current element from the right sum
		$sum_r -= $v;
		# Check if left sum equals right sum and update output array
		if($sum_l === $sum_r){
			$output[] = $k;
		}
		# Add the current element to the left sum
		$sum_l += $v;
	}
	
	return $output;
}
