<?php

// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}

		
$pen	=	mysqli_real_escape_string($con,$_POST['pen']);
$notch	=	mysqli_real_escape_string($con,$_POST['notch']);
$tag	=	mysqli_real_escape_string($con,$_POST['tag']);
$date1	=	mysqli_real_escape_string($con,$_POST['date1']);
$boar1	=	mysqli_real_escape_string($con,$_POST['boar1']);


$insert = "INSERT INTO pigpens (pen, notch, tag, date1, boar1)
		VALUES ('$pen', '$notch', '$tag', '$date1', '$boar1')";

if($con->query($insert) === TRUE){
	echo "Save successful!)";
}
else{
	echo "Failed to save data";
}
		

// ----------------------------
// close connection to database
mysqli_close($con);
?>