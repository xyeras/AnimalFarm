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
$date2_month = mysqli_real_escape_string($con,$_POST['date2_month']);
$date2_day = mysqli_real_escape_string($con,$_POST['date2_day']);
$date2_year = mysqli_real_escape_string($con,$_POST['date2_year']);
$boar2 = mysqli_real_escape_string($con,$_POST['b2']);
$date3_month = mysqli_real_escape_string($con,$_POST['date3_month']);
$date3_day = mysqli_real_escape_string($con,$_POST['date3_day']);
$date3_year = mysqli_real_escape_string($con,$_POST['date3_year']);
$line = mysqli_real_escape_string($con,$_POST['line']);
$newPen = mysqli_real_escape_string($con,$_POST['np']);
$comm = mysqli_real_escape_string($con,$_POST['comm']);

// --------------- date2 ------------------------------------------
// converts date from string to int
$m2Int = (int) $date2_month;
$d2Int = (int) $date2_day;
$y2Int = (int) $date2_year ;

// n is for month with no 0 prefix,j is for the day with no 0 prefix Y is needed for fout digit year
// this is a string
$date2 = date("n/j/Y",mktime(0,0,0,$m2Int,$d2Int,$y2Int));

// ---------------- date 3 ----------------------------------------
// converts date from string to int
$m3Int = (int) $date3_month;
$d3Int = (int) $date3_day;
$y3Int = (int) $date3_year ;

// n is for month with no 0 prefix,j is for the day with no 0 prefix Y is needed for fout digit year
// this is a string
$date3 = date("n/j/Y",mktime(0,0,0,$m3Int,$d3Int,$y3Int));

// ------------------------------------------------------------------
// update database sentence
$msyqlStatment = "UPDATE pigpens SET date2 = '$date2', boar2 = '$boar2', date3 = '$date3', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows'";

// update database statement
if($con->query($msyqlStatment))
{
	echo "Save successful";
}
else
{
	echo "Failed to save data.";
}


// close connection to database
mysqli_close($con);
?>