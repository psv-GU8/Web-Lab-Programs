<?php  
$string = "Mississippi Alabama Texas Massachusetts Kansas"; 
$states = explode(' ',$string);  
echo "Original Array :<br>";  
foreach($states as $i => $value)	print("STATES[$i] = $value <br>");  

foreach($states as $state){   
	if(preg_match( '/xas$/', ($state)))		$statesArray[0] = ($state);  
	if(preg_match('/^k.*s$/i', ($state)))	$statesArray[1] = ($state); 
	if(preg_match('/^M.*s$/', ($state)))	$statesArray[2] = ($state); 
	if(preg_match('/a$/', ($state)))		$statesArray[3] = ($state); 
}  

echo "<br><br>Resultant Array :<br>";  
foreach($statesArray as $array => $value)	print("STATES[$array] = $value <br>"); 