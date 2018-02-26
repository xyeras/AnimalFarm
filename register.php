<?php

// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}

		
$email		=$_POST['email'];
$password	=md5($_POST['pword']);
//$permission	=$_POST['permission'];
$fName		=$_POST['fName'];
$lName		=$_POST['lName'];
//$idNum		=$_POST['idNum'];

$insert = "INSERT INTO login (email,password,firstName,lastName)
		VALUES ($email, $password,$fName,$lName)";

if($con->query($insert)){
	echo "You have successfully registerd!";
}
else{
	echo "Failed to register.";
}
		

// ----------------------------
// close connection to database
mysqli_close($con);
?>