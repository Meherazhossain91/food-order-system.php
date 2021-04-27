<?php 

$dCode = $_REQUEST["dCode"];

$db = mysqli_connect('localhost', 'root', '', 'dailyFood');
$sql="SELECT `amount` FROM `discount` WHERE `code`='$dCode'";
$result=mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
	$amount=$row["amount"];
	echo "Congratulation...! You have got ".$amount." tk discount...!";
}else{
	echo "Sorry, your code is invalid";
}






?>