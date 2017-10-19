<?php
// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");



// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}

// grab php variable (today's date from date method) for name to search
$heatDate = mysqli_real_escape_string($con,$_POST['heat_date']); 

$mysqlStatement = "SELECT pen,notch,tag,date1,boar1,date2,boar2 FROM pigpens WHERE date3 = $heatDate"; // need to find out why $heatDate doesn't make date3 in datebase

// return data for pigs who need a heat checkdate
$rowData = $con->query($mysqlStatement);
if($rowData->num_rows > 0) {
	echo "
    	<table>
          <tr>
	        <th>Pen</th>
	        <th>Notch</th>
	        <th>Tag</th>
        	<th>Date</th>
        	<th>Boar</th>
        	<th>Date</th>
        	<th>Boar</th>
		  </tr>";
	while($row = $rowData->fetch_assoc())
	{
		echo 
		// Kathryn's edit table code mabye in a later interation
		"<tr>
		<td>".$row["pen"]."</td>
		<td>".$row["notch"]."</td>
		<td>".$row["tag"]."</td>
		<td>".$row["date1"]."</td>
		<td>".$row["boar1"]."</td>
		<td>".$row["date2"]."</td>
		<td>".$row["boar2"]."</td>
		</tr>";
	}
	echo "</table>";
}

// close connection to database
mysqli_close($con);

?>