<?php
// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");



// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}

// grab php variable (today's date from date method) for name to search
$m = mysqli_real_escape_string($con,$_POST['months']);
$d = mysqli_real_escape_string($con,$_POST['days']);
$y = mysqli_real_escape_string($con,$_POST['years']);

$email = mysqli_real_escape_string($con,$_POST['e']);


$mInt = (int) $m;
$dInt = (int) $d;
$yInt = (int) $y;
// n is for month with no 0 prefix,j is for the day with no 0 prefix Y is needed for fout digit year
// this is a string
$heatDate = date("n/j/Y",mktime(0,0,0,$mInt,$dInt,$yInt));


$mysqlStatement = "SELECT num_rows,pen,notch,tag,date1,boar1,date2,boar2,heat,date3,line,newPen,comm FROM pigpens WHERE date3 = '$heatDate' AND (heat IS NULL OR heat ='') AND email = '$email'"; 


// return data for pigs who need a heat checkdate
$counter = 0;
$rowData = $con->query($mysqlStatement);
if($rowData->num_rows > 0) 
{   
	while($row = $rowData->fetch_assoc())
	{
        $counter = $counter + 1;
	}
}
 echo "$counter";
// close connection to database
mysqli_close($con);

?>