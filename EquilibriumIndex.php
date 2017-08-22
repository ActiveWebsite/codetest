<?php
# Same Idea as my python index finder O(n) complexity
function getEquilibriums($arr) {
	#Determine total sum
    $rightSum = array_sum($arr);
	#Initialize Variables
    $leftSum = 0;
    $output = array();
	#Iterate Through array
    foreach($arr as $index => $value){
		#Determine Right Sum
        $rightSum -= $value;
		#Check if equilibrium index
        if($leftSum == $rightSum) $output[] = $index;
        $leftSum += $value;
    }
	return $output;
}
 
