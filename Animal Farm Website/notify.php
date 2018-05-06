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


$mysqlStatement = "SELECT num_rows,pen,notch,tag,breed,date1,boar1,date2,boar2,heat,date3,line,newPen,comm FROM pigpens WHERE date3 = '$heatDate' AND (heat IS NULL OR heat ='') AND email = '$email'"; 

// return data for pigs who need a heat checkdate
$rowData = $con->query($mysqlStatement);
if($rowData->num_rows > 0) {
	echo "
    	<table class=\"highlight centered bordered container\">
          <tr>
	       <th>Pen</th>
	        <th>Notch</th>
	        <th>Tag</th>
	        <th>Breed</th>
        	<th>Date 1</th>
        	<th>Boar 1</th>
        	<th>Date 2</th>
        	<th>Boar 2</th>
        	<th>Heat</th>
        	<th>Date 3</th>
        	<th>Line</th>
        	<th>New Pen</th>
    	    <th>Comments</th>
		  </tr>";
	while($row = $rowData->fetch_assoc())
	{
		echo 
		// Kathryn's edit table code mabye in a later interation
		"<tr value=\"".$row["num_rows"]."\" onclick=\"sendRow(this)\">
            <td>".$row["pen"]."</td>
		    <td>".$row["notch"]."</td>
		    <td>".$row["tag"]."</td>
		    <td>".$row["breed"]."</td>
		    <td>".$row["date1"]."</td>
		    <td>".$row["boar1"]."</td>
		    <td>".$row["date2"]."</td>
		    <td>".$row["boar2"]."</td>
		    <td>".$row["heat"]."</td>
		    <td>".$row["date3"]."</td>
		    <td>".$row["line"]."</td>
		    <td>".$row["newPen"]."</td>
		    <td>".$row["comm"]."</td>
		</tr>";
	}
	echo "</table>";
}

// close connection to database
mysqli_close($con);

?>