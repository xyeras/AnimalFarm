<?php
// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}
// statment to retrieve rows from database
$msyqlStatment = "SELECT pen,notch,tag,date1,boar1,date2,boar2,heat,date3,line,newPen,comm FROM pigpens";

// Kathryn's code here



// ----------------------------
// close connection to database
mysqli_close($con);
?>