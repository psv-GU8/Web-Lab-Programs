<?php

$matrixA = [[1,2,3],[4,5,6],[7,8,9]];
$matrixB = [[9,8,7],[6,5,4],[3,2,1]];
$matrixSum = [[0,0,0],[0,0,0],[0,0,0]];
$matrixProduct = [[0,0,0],[0,0,0],[0,0,0]];

function add($matrixA,$matrixB){
	for ($i=0; $i < 3; $i++) 
		for ($j=0; $j < 3; $j++) $matrixSum[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j]; 
	return $matrixSum;
}

function multiply($matrixA,$matrixB){
	for ($i=0; $i < 3; $i++) 
		for ($j=0; $j < 3; $j++){
			$c[$i][$j]=0;
			for($k=0;$k<3;$k++){
				$c[$i][$j] = $c[$i][$j]+($matrixA[$i][$k]*$matrixB[$k][$j]);
			}
			$matrixProduct[$i][$j] = $c[$i][$j];
		}
	return $matrixProduct;
}

function transpose($matrix){
	$temp = array(array());
	for ($i = 0; $i < 3; $i++) 
        for ($j = 0; $j < 3; $j++) $temp[$i][$j] = $matrix[$j][$i]; 
    return $temp;
}

function display($msg,$matrix){
	echo $msg . "<br>";
	for ($i=0; $i < 3; $i++) { 
		for ($j=0; $j < 3; $j++)  
			echo $matrix[$i][$j]." &nbsp; ";
		echo "<br>";
	}
	echo "<br>";
}

display("Matrix A : ",$matrixA);
display("Matrix B : ",$matrixB);
display("Matrix A Transpose : ",transpose($matrixA));
display("Sum of Matrix : ",add($matrixA,$matrixB));
display("Product of Matrix : ",multiply($matrixA,$matrixB));

?>