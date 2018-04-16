<?php

// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}


$find = "SELECT COUNT(breed) AS b FROM pigpens WHERE breed ='Crossbred'";

$rowData = $con->query($find);
$arrayData = $rowData->fetch_assoc();
echo $arrayData['b'];


// ----------------------------
// close connection to database
mysqli_close($con);
?>