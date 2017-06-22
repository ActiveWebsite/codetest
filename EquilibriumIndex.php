<?php
/**
* Name: getEquilibriums
* 
* Purpose: Find any equilibrium indexes in a PHP array. 
*
* @param array of integer(s)
*
* @return array of integer(s)
*
**/
function getEquilibriums($arr) {
  //any equilibrium index points will be added to this array	
  $output = array();

  //check if array 
  if( !is_array($arr) )
  		return;

  //get the sum of the array (i.e. the sum of all indices when at the element furthest to the right)
  $sum = array_sum($arr);

  //starting point to compare in indices in the loop
  $start = 0; 

  //loop through the input array to begin logic to check for equilibrium indices
  foreach($arr as $key => $value){
            
            //furthest right position sum minus value of the array at current index
  			$sum = ($sum - $value);

  			//if the sum of the array is in equilibrium to the left side at this index, add it to the output array
  			if($sum == $start)
  					array_push($output, $key);

  			//the left side of the array set to its value from last iteration plus the value of the current index
  			$start = ($start + $value);

  }

  return $output;
}


 
