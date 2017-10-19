<?php
$pen=$_POST['pen'];
$notch=$_POST['notch'];
$tag=$_POST['tag'];
$date1=$_POST['date1'];
$boar1=$_POST['boar1'];
$date2=$_POST['date2'];
$boar2=$_POST['boar2'];
$heat=$_POST['heat'];
$date3=$_POST['date3'];
$line=$_POST['line'];
$newPen=$_POST['newPen'];
$comments=$_POST['comm'];

// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}

$insert = "INSERT INTO pigpens (pen, notch, tag, date1, boar1, date2, boar2, heat, date3, line, newPen, comm)
		VALUES ($pen, $notch, $tag, $date1, $boar1, $date2, $boar2, $heat, $date3, $line, $newPen, $comments)";
		
$edit = "";



// ----------------------------
// close connection to database
mysqli_close($con);
?>