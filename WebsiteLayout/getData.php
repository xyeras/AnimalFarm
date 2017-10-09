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
function fetchData(){
	$rowData = $con->query(msyqlStatment);
	if($rowData->num_rows > 0) {
		// output data into table
		while($row = $rowData->fetch_assoc())
		{
			echo 
			"<tr>
			<td><div contenteditable>".$row["pen"]."</div></td>
			<td><div contenteditable>".$row["notch"]."</div></td>
			<td><div contenteditable>".$row["tag"]."</div></td>
			<td><div contenteditable>".$row["date1"]."</div></td>
			<td><div contenteditable>".$row["boar1"]."</div></td>
			<td><div contenteditable>".$row["date2"]."</div></td>
			<td><div contenteditable>".$row["boar2"]."</div></td>
			<td><div contenteditable>".$row["heat"]."</div></td>
			<td><div contenteditable>".$row["date3"]."</div></td>
			<td><div contenteditable>".$row["line"]."</div></td>
			<td><div contenteditable>".$row["newPen"]."</div></td>
			<td><div contenteditable>".$row["comm"]."</div></td>
			</tr>";
		}
	}
}
// ----------------------------
// close connection to database
mysqli_close($con);
?>