<?php

// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}

		


$yorkshire = "SELECT breed FROM pigpens WHERE breed='Yorkshire'";
$crossbred = "SELECT breed FROM pigpens WHERE breed='Crossbred'";
$berkshire = "SELECT breed FROM pigpens WHERE breed='Berkshire'";
$cwl       = "SELECT breed FROM pigpens WHERE breed='Chester White and Landrace'";
$berkshire = "SELECT breed FROM pigpens WHERE breed='Berkshire'";
$chester   = "SELECT breed FROM pigpens WHERE breed='Chester White and Landrace'";
$sh        = "SELECT breed FROM pigpens WHERE breed='Spotted Hereford Tamworth'";
$duroc     = "SELECT breed FROM pigpens WHERE breed='Duroc'";
$ham       = "SELECT breed FROM pigpens WHERE breed='Hampshire'";



$rowData = $con->query($find);

		

// ----------------------------
// close connection to database
mysqli_close($con);
?>