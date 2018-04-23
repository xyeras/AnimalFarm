<?php

// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}

		
$rowNum		=	mysqli_real_escape_string($con,$_POST['rowNum']);
//$email = mysqli_real_escape_string($con,$_POST['e']);

$del = "DELETE FROM pigpens WHERE num_rows='$rowNum'";					
					
if($conn->query($del) === TRUE) {
	echo "Successfully Deleted Row";
}
else
{
	echo "Row Not Found.";
}
		

// ----------------------------
// close connection to database
mysqli_close($con);
?>