<?php
// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}

$email = mysqli_real_escape_string($con,$_POST['e']);

// statment to retrieve rows from database
$msyqlStatment = "SELECT num_rows,pen,notch,tag,breed,date1,boar1,date2,boar2,heat,date3,line,newPen,comm FROM pigpens WHERE email = '$email' ORDER BY num_rows DESC";

// Kathryn's code here
//function fetchData(){
$rowData = $con->query($msyqlStatment);
if($rowData->num_rows > 0) {
	// output data into table
	echo "
    	<table id = \"table1\" class=\"highlight centered bordered container\">
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
        	<th>Date</th>
        	<th>Line</th>
        	<th>New Pen</th>
    	    <th>Comments</th>
          </tr>";
	while($row = $rowData->fetch_assoc())
	{
		echo
		"<tr data-value=\"".$row["num_rows"]."\" onclick=\"edButton(this)\">
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
//}

// ----------------------------
// close connection to database
mysqli_close($con);
?>