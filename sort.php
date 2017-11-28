<?php
$number_set = array(10, 1, -20, -53, -53, 70, 21, 100, 45, 22, 99, 1000);

$sorted = sort_array($number_set, 'asc');

foreach ($sorted as $value){
	echo $value . '<br>';
}


// sort an array values
function sort_array($numarray, $order='asc'){
	$temp_array = $numarray;
	$sorted_array = array();
	for($i=0; $i < count($numarray); $i++){	
		foreach ($temp_array as $lowest){
			foreach ($temp_array as $value){
				if($order == 'asc'){
					if($lowest < $value ){
						$lowest = $lowest;
					}
					else {
						$lowest = $value;
					}									
				}
				else{
					if($lowest > $value ){
						$lowest = $lowest;
					}
					else {
						$lowest = $value;
					}					
				}
			}
		}
		foreach ($temp_array as $index => $value){	
			if($value == $lowest){
				$index_of_lowest = $index;
				break;
			}	
		}
		$sorted_array[$i] = $temp_array[$index_of_lowest];
		unset($temp_array[$index_of_lowest]);
	}		
	return $sorted_array;
}
