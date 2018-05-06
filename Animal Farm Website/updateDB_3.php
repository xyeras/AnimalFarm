<?php
// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to database" . mysqli_connect_error();
}

// retrieves values from updateDB.js
$num_rows = mysqli_real_escape_string($con,$_POST['nr']);
$line = mysqli_real_escape_string($con,$_POST['line']);
$newPen = mysqli_real_escape_string($con,$_POST['np']);
$comm = mysqli_real_escape_string($con,$_POST['comm']);


// update database sentence
$msyqlStatment = "UPDATE pigpens SET line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows'";

// update database statement
if($con->query($msyqlStatment))
{
	echo "Submission was successful! <i class=\"small material-icons green-text\">check_circle</i>";
}
else
{
	echo "Failed to save data. <i class=\"small material-icons red-text\">cancel</i>";
}


// close connection to database
mysqli_close($con);
?>
