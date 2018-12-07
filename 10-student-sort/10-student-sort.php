<?php

function display($a,$b,$c, $msg){
	echo "<center>  ".$msg." </center>"; 
	echo "<table border='1'><tr><th>USN</th><th>NAME</th><th>Address</th></tr>"; 
	for ($i=0; $i < sizeof($a); $i++) { 
		echo "<tr><td>".$a[$i]."</td>"; 
		echo "<td>".$b[$i]."</td>"; 
		echo "<td>".$c[$i]."</td></tr>"; 
	}
	echo "</table><br>";
}

function sorts($arr){
	for ($i=0; $i < sizeof($arr); $i++) { 
		$minIndex = $i;
		for ($j=$i+1; $j < sizeof($arr); $j++)
        if($arr[$minIndex] > $arr[$j])   $minIndex = $j; 
		$temp = $arr[$minIndex];
        $arr[$minIndex] = $arr[$i];
        $arr[$i] = $temp;
	}
	return $arr;
}

$conn = mysqli_connect("localhost", "root", "", "student");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "Connected successfully";
	$sql = "SELECT * FROM student"; 
	$result = mysqli_query($conn,$sql); 
	$usn = array();
	$name = array();
	$address = array();
	while($row = mysqli_fetch_assoc($result)){
		array_push($usn, $row["usn"]);
		array_push($name, $row["name"]);
		array_push($address, $row["address"]);
	}
	display($usn,$name,$address, " Before Sort ");
	$a = sorts($usn);
	$b = array();
	$c = array();
	for ($i=0; $i < sizeof($usn); $i++)
		for($j=0; $j < sizeof($usn); $j++) 
			if($a[$i] == $usn[$j]){
				array_push($b, $name[$j]);
				array_push($c, $address[$j]);
			}
	display($a,$b,$c," After Sort ");
}
?>