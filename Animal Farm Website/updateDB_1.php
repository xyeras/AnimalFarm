<?php
// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to database" . mysqli_connect_error();
}

// retrieves values from updateDB.js
$num_rows     = mysqli_real_escape_string($con,$_POST['nr']);
$pen          = mysqli_real_escape_string($con,$_POST['p']);
$notch        = mysqli_real_escape_string($con,$_POST['n']);
$tag          = mysqli_real_escape_string($con,$_POST['t']);
$breed        = mysqli_real_escape_string($con,$_POST['b']);
$year1        = mysqli_real_escape_string($con,$_POST['y1']);
$month1       = mysqli_real_escape_string($con,$_POST['m1']);
$day1         = mysqli_real_escape_string($con,$_POST['d1']);
$boar1        = mysqli_real_escape_string($con,$_POST['b1']);
$year2        = mysqli_real_escape_string($con,$_POST['y2']);
$month2       = mysqli_real_escape_string($con,$_POST['m2']);
$day2         = mysqli_real_escape_string($con,$_POST['d2']);
$boar2        = mysqli_real_escape_string($con,$_POST['b2']);
$heat         = mysqli_real_escape_string($con,$_POST['h']);
$year3        = mysqli_real_escape_string($con,$_POST['y3']);
$month3       = mysqli_real_escape_string($con,$_POST['m3']);
$day3         = mysqli_real_escape_string($con,$_POST['d3']);
$line         = mysqli_real_escape_string($con,$_POST['line']);
$newPen       = mysqli_real_escape_string($con,$_POST['np']);
$comm         = mysqli_real_escape_string($con,$_POST['comm']);
$isDate1Valid = mysqli_real_escape_string($con,$_POST['isDate1Valid']);
$isDate2Valid = mysqli_real_escape_string($con,$_POST['isDate2Valid']);
$isDate3Valid = mysqli_real_escape_string($con,$_POST['isDate3Valid']);
$email        = mysqli_real_escape_string($con,$_POST['e']);

// --------------- date1 ------------------------------------------
// 0 if date has input from user or read from row
// 1 if no date read anywhere


if ($isDate1Valid == '0' and $isDate2Valid == '1' and $isDate3Valid == '1')   // only date1 is being used
{

    // converts date from string to int
    $m1Int = (int) $month1;
    $d1Int = (int) $day1;
    $y1Int = (int) $year1;

    // n is for month with no 0 prefix,j is for the day with no 0 prefix Y is needed for fout digit year
    // this is a string
    $date1 = date("n/j/Y",mktime(0,0,0,$m1Int,$d1Int,$y1Int));

    $msyqlStatment = "UPDATE pigpens SET pen = '$pen', notch ='$notch', tag = '$tag', breed = '$breed', date1 = '$date1', boar1 = '$boar1', boar2 = '$boar2', heat = '$heat', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows' AND email = '$email'";

}

else if ($isDate1Valid == '1' and $isDate2Valid == '0' and $isDate3Valid == '1')  // only date2 is being used
{
    $m2Int = (int) $month2;
    $d2Int = (int) $day2;
    $y2Int = (int) $year2;


    $date2 = date("n/j/Y",mktime(0,0,0,$m2Int,$d2Int,$y2Int));

    $msyqlStatment = "UPDATE pigpens SET pen = '$pen', notch ='$notch', tag = '$tag', breed = '$breed', boar1 = '$boar1',date2 = '$date2', boar2 = '$boar2', heat = '$heat', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows' AND email = '$email'";
}

else if ($isDate1Valid == '1' and $isDate2Valid == '1' and $isDate3Valid == '0')   // only date3 is being used
{
    $m3Int = (int) $month3;
    $d3Int = (int) $day3;
    $y3Int = (int) $year3;

    $date3 = date("n/j/Y",mktime(0,0,0,$m3Int,$d3Int,$y3Int));
    $msyqlStatment = "UPDATE pigpens SET pen = '$pen', notch ='$notch', tag = '$tag', breed = '$breed', boar1 = '$boar1', boar2 = '$boar2', heat = '$heat', date3 = '$date3', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows' AND email = '$email'";
}

else if ($isDate1Valid == '0' and $isDate2Valid == '0' and $isDate3Valid == '1')   // only date1 and date2 are being used
{
    $m1Int = (int) $month1;
    $d1Int = (int) $day1;
    $y1Int = (int) $year1;

    $date1 = date("n/j/Y",mktime(0,0,0,$m1Int,$d1Int,$y1Int));


    $m2Int = (int) $month2;
    $d2Int = (int) $day2;
    $y2Int = (int) $year2;

    $date2 = date("n/j/Y",mktime(0,0,0,$m2Int,$d2Int,$y2Int));


    $msyqlStatment = "UPDATE pigpens SET pen = '$pen', notch ='$notch', tag = '$tag', breed = '$breed', date1 = '$date1', boar1 = '$boar1', date2 = '$date2', boar2 = '$boar2', heat = '$heat', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows' AND email = '$email'";
}

else if ($isDate1Valid == '1' and $isDate2Valid == '0' and $isDate3Valid == '0')   // only date2 and date3 are being used
{
    $m2Int = (int) $month2;
    $d2Int = (int) $day2;
    $y2Int = (int) $year2;

    $date2 = date("n/j/Y",mktime(0,0,0,$m2Int,$d2Int,$y2Int));


    $m3Int = (int) $month3;
    $d3Int = (int) $day3;
    $y3Int = (int) $year3;

    $date3 = date("n/j/Y",mktime(0,0,0,$m3Int,$d3Int,$y3Int));


    $msyqlStatment = "UPDATE pigpens SET pen = '$pen', notch ='$notch', tag = '$tag', breed = '$breed', boar1 = '$boar1', date2 = '$date2', boar2 = '$boar2', heat = '$heat', date3 = '$date3', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows' AND email = '$email'";
}

else if ($isDate1Valid == '0' and $isDate2Valid == '1' and $isDate3Valid == '0')  // only date1 and date3 are being used
{
    $m1Int = (int) $month1;
    $d1Int = (int) $day1;
    $y1Int = (int) $year1;

    $date1 = date("n/j/Y",mktime(0,0,0,$m1Int,$d1Int,$y1Int));


    $m3Int = (int) $month3;// not *Int
    $d3Int = (int) $day3;
    $y3Int = (int) $year3;

    $date3 = date("n/j/Y",mktime(0,0,0,$m3Int,$d3Int,$y3Int));

    $msyqlStatment = "UPDATE pigpens SET pen = '$pen', notch ='$notch', tag = '$tag', breed = '$breed', date1 = '$date1', boar1 = '$boar1', boar2 = '$boar2', heat = '$heat', date3 = '$date3', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows' AND email = '$email'";
}

else if ($isDate1Valid == '0' and $isDate2Valid == '0' and $isDate3Valid == '0') // all date fields are filled
{
    $m1Int = (int) $month1;
    $d1Int = (int) $day1;
    $y1Int = (int) $year1;

    $date1 = date("n/j/Y",mktime(0,0,0,$m1Int,$d1Int,$y1Int));


    $m2Int = (int) $month2;
    $d2Int = (int) $day2;
    $y2Int = (int) $year2;

    $date2 = date("n/j/Y",mktime(0,0,0,$m2Int,$d2Int,$y2Int));


    $m3Int = $month3;
    $d3Int = $day3;
    $y3Int = $year3;

    $date3 = date("n/j/Y",mktime(0,0,0,$m3Int,$d3Int,$y3Int));

    $msyqlStatment = "UPDATE pigpens SET pen = '$pen', notch ='$notch', tag = '$tag', breed = '$breed', date1 = '$date1', boar1 = '$boar1', date2 = '$date2', boar2 = '$boar2', heat = '$heat', date3 = '$date3', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows' AND email = '$email'";
}

else if ($isDate1Valid == '1' and $isDate2Valid == '1' and $isDate3Valid == '1') // no date fields are filled
{
     $msyqlStatment = "UPDATE pigpens SET pen = '$pen', notch ='$notch', tag = '$tag', breed = '$breed', boar1 = '$boar1', boar2 = '$boar2', heat = '$heat', line = '$line', newPen = '$newPen', comm = '$comm' WHERE  num_rows = '$num_rows' AND email = '$email'";
}


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
