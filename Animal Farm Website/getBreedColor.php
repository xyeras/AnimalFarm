<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js">
    </script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    </head>
    <style>
        td.York {
            background-color: purple;
        }
		td.Cross {
			background-color: green;
		}
		td.Berk {
			background-color: blue;
		}
		td.Chester {
			background-color: red;
		}
		td.Spotted {
			background-color: white;
		}
		td.Duroc {
			background-color: orange;
		}
		td.Hampshire {
			background-color: yellow;
		}
        
    </style>
    <body>
	
	<select id = "breedMenu" >
	  <option value="" disabled selected>Choose your option</option>
	  <option value="1" >Yorkshire</option>
	  <option value="2">Crossbreed</option>
	  <option value="3">Berkshire</option>
	  <option value="4">Chester White and Landrace</option>
	  <option value="5">Spotted Hereford Tamworth</option>
	  <option value="6">Duroc</option>
	  <option value="7">Hampshire</option>
	</select>
        
<?php
// connects to the database in 000webhost
$con = mysqli_connect("localhost","id2929022_150students","csci150","id2929022_pigpens");

// sends out an error message if the connection doesn't happen
if (mysqli_connect_error())
{
	echo "Fail to connect to MySQL:" . mysqli_connect_error();
}
// statment to retrieve rows from database
$msyqlStatment = "SELECT pen,notch,tag,date1,boar1,date2,boar2,heat,date3,line,newPen,comm FROM pigpens ORDER BY num_rows DESC";

// Kathryn's code here
//function fetchData(){
$rowData = $con->query($msyqlStatment);
if($rowData->num_rows > 0) {
	// output data into table
	
	echo "
    	<table class=\"highlight centered bordered container\">
          <tr>
	        <th>Pen</th>
	        <th>Notch</th>
	        <th>Tag</th>
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
		"<tr>
		    <td>".$row["pen"]."</td>
		    <td>".$row["notch"]."</td>
		    <td>".$row["tag"]."</td>
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

</body>
</html>