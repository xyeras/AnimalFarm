<?php
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}
else
{
	echo "all is good";
}

?>