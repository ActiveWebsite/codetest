<?php

/** 
 * Equilibium Point Function
 * 
 * This funciton calculates the equilibrium points of a given sequence. Equilibrium points are calculated
 * by checking to see whether the sum of the points on the either side of the equilibrium index are equal to each other.
 *
 * @author Atir Javid <atirjavid@gmail.com>
 * @param array $arr
 * @return array
**/
function getEquilibriums($arr) 
{ 
  // init $output as array of equilibrium indexes
  $output = array(); 
  
  // add all indexes together for a total sum value, then subtract each index element. 
  // Upon each iteration, this will hold sum of indexes to the right of the subtracted index
  $right = array_sum($arr);
  
  // this holds the sum of all indexes on the left, since we start with nothing on the left(nothing to add), it's init to 0
  $left = 0;
 
   foreach ($arr as $k => $v)
  {
   	  // here we subtract each iterated index's value from the array/total sum
      // now we have divided the array into all the indexes to the right of the current iterated index
   	  $right -= $v; 
      
      // check to see if left == right. If so, we have an eq index, add it to the output to return
      if ($left == $right) $output[] = $k;

   	  // here we add the current iterated index's value to left, so it holds the sum of all the 
   	  // values on the left of the current iterated index.
   	  $left += $v;
  } 
  return $output;
}
