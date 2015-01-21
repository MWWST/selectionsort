<?php
$time_start =microtime(true);
$myary = array();
for ($i=0;$i<101;$i++) {
	$random = rand(0,1001);
	array_push($myary, $random);
}



function selection($array) {
	$len = count($array);
	for ($j=0;$j<$len;$j++){
		$min = $array[$j];
			for ($k=$j+1;$k<$len;$k++){
				if ($array[$k]<$min) {
					$min = $array[$k];
				}

				if ($min != $array[$j]){
					$temp = $array[$j];
					$array[$j]= $array[$k];
					$array[$k] = $temp;
				}
			}
		}
		return $array;
	}	

var_dump(selection($myary));

$time_end = microtime(true);
$time = $time_end - $time_start;

echo "This took"." " . $time. " " . "seconds";

?>
