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
$pen      = mysqli_real_escape_string($con,$_POST['p']);
$notch    = mysqli_real_escape_string($con,$_POST['n']);
$tag      = mysqli_real_escape_string($con,$_POST['t']);
$breed    = mysqli_real_escape_string($con,$_POST['b']);
$year1    = mysqli_real_escape_string($con,$_POST['y1']);
$month1   = mysqli_real_escape_string($con,$_POST['m1']);
$day1     = mysqli_real_escape_string($con,$_POST['d1']);
$boar1    = mysqli_real_escape_string($con,$_POST['b1']);
$boar2    = mysqli_real_escape_string($con,$_POST['b2']);
$heat     = mysqli_real_escape_string($con,$_POST['h']);
$line     = mysqli_real_escape_string($con,$_POST['line']);
$newPen   = mysqli_real_escape_string($con,$_POST['np']);
$comm     = mysqli_real_escape_string($con,$_POST['comm']);
$setDate1 = mysqli_real_escape_string($con,$_POST['setDate1']);

// --------------- date1 ------------------------------------------
// converts date from string to int
if ($setDate1 == '0')
{
    

    $m1Int = (int) $month1;
    $d1Int = (int) $day1;
    $y1Int = (int) $year1;

    // n is for month with no 0 prefix,j is for the day with no 0 prefix Y is needed for fout digit year
    // this is a string
    $date1 = date("n/j/Y",mktime(0,0,0,$m1Int,$d1Int,$y1Int));
    echo "date1  ";
    echo $date1;
    echo " ";
    $msyqlStatment = "UPDATE pigpens SET pen = '$pen', notch ='$notch', tag = '$tag', breed = '$breed', date1 = $date1, boar1 = '$boar1', boar2 = '$boar2', heat = '$heat', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows'";

}


// ---------------- date 3 ----------------------------------------
// converts date from string to int
//$m3Int = (int) $date3_month;
//$d3Int = (int) $date3_day;
//$y3Int = (int) $date3_year ;

// n is for month with no 0 prefix,j is for the day with no 0 prefix Y is needed for fout digit year
// this is a string
//$date3 = date("n/j/Y",mktime(0,0,0,$m3Int,$d3Int,$y3Int));

// ------------------------------------------------------------------
else
{
    // update database sentence
    $msyqlStatment = "UPDATE pigpens SET pen = '$pen', notch ='$notch', tag = '$tag', breed = '$breed', boar1 = '$boar1', boar2 = '$boar2', heat = '$heat', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows'";
}
// update database statement
if($con->query($msyqlStatment))
{
	echo "Save successful!";
}
else
{
	echo "Failed to save data.";
}


// close connection to database
mysqli_close($con);
?>