<?php

/**
 * Function getEquilibriums
 * This function finds the equilibrium indexes of the array passed as parameter. An equilibrium index is the array 
 * index value where the sum of all the elements to the right of it is equal to the sum of all elements to the left 
 * of the index. 
 * 
 * @param  array[int] $arr 		: Array of integers
 * @return array[int] $output 	: Array with equilibrium indexes if they exists, otherwise returns an empty array
 */
function getEquilibriums($arr) {
	$output = array();

	// Make sure $arr is an array otherwise the return value is an empty array
	if (is_array($arr)){
		$length 	= count($arr);

		// Variable that is going to keep the sum of all array elements, from index 0 to index N-1 (N is array length)
		$left_acum 	= 0;							

		// Variable that holds the sum of all array elements.
		$right_acum = array_sum($arr);				

		// We need to iterate over all elements in the array $arr only once. In order to get, on the same iteration, 
		// the sum of all elements on the right and sum of elements on the left of the current index.
		for ($index=0; $index < $length; $index++) { 

			
			// Add the value of the previous array element, if exists, to the variable that holds the sum of all 
			// array elements on that are on the left of the current index.
			// Make sure the previous index is a valid index, this means bigger or equal to 0.
			if ($index-1>=0){
				$left_acum 	+= $arr[$index-1];
			}

			// We start knowing the value of adding all the elements on the array ($arr), so if we start on the 
			// element on the left (index 0) and we substract its value from the sum of all array elements , we 
			// are going to get a value that represents the sum of all elements on the array minus the value of the
			//  element on index 0. If we store that last value and we keep substracting each array value, one by one,from left to right,on each iteration we get the sum of all elements to the right of the current index. 
			$right_acum 	-= $arr[$index];
			
			// If the sum of elements on the left is equal to the sum of elements to the right then this index is known
			// as an equilibrium index and needs to be added to the return values.
			if ($left_acum==$right_acum){
				// An array can have more than one equilibrium indexes, so add the equilibrium index to the 
				// array that is going to be returned.
				$output[]=$index;
			}
		}
	}
	return $output;
}
 
