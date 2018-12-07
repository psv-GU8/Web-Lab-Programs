<?php

$sum = 0;
$difference = 0;
$product = 0;
$quotient = 0;

if(isset($_GET['result'])){
 $num1 = $_GET['num1'];
 $num2 = $_GET['num2'];
 $sum = $num1 + $num2;
 $difference = $num1 - $num2;
 $product = $num1 * $num2;
 $quotient = $num1 / $num2;
}

echo '<table border="1" align="center">
<form method="get" action="">
<tr>
	<td>First Number : </td>
	<td><input name="num1" type="text" placeholder="0">
</tr>
<tr>
	<td>Second Number : </td>
	<td><input name="num2" type="text" placeholder="0"></td>
	<td rowspan="7"><input type="submit" name="result" value="Calculate"></td>
</tr>
</form>
<tr>
	<td>Addition : </td>
	<td>'.$sum.'</td>
</tr>
<tr>
	<td>Subtraction : </td>
	<td>'.$difference.'</td>
</tr>
<tr>
	<td>Multiplication : </td>
	<td>'.$product.'</td>
</tr>
<tr>
	<td>Division : </td>
	<td>'.$quotient.'</td>
</tr>
</table>';
?>