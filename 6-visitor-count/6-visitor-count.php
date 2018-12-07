<?php 

echo "<h2> Welcome to our Website </h2>"; 
$name=" count.txt"; 
$file = fopen($name,"r"); 
$hits= fscanf($file,"%d"); 
fclose($file); 
 
$hits[0]++; 
$file = fopen($name,"w"); 
fprintf($file,"%d",$hits[0]); 
fclose($file); 
 
echo "Total count of visitors : ".$hits[0]; 
?>