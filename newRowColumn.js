//	comments for line appear before the line

function newRow(){	//	Adds Row at Beginning
	var table = document.getElementById("table1");
		//	numCol = current number of columns in table
	var numCol = document.getElementById("table1").rows[0].cells.length;
		//	creats a new row at the very top of the table, but under the headers
	var row = table.insertRow(1);
	for (var i = 0; i < numCol; i++)
	{
			//	creates a new cell in the new row in position [i]
		var cell = row.insertCell(i);
			//	sets the text of the cell to nothing, and make it editable
		cell.innerHTML = "<div contenteditable></div>";
	}
}

function newColumn(){	//	Adds Column at End
	var table = document.getElementById("table1");
		//	sets numRow equal to the current number of rows in the table
	var numRow = table.rows.length;
		//	headRow equals row[0], with the table headers
	var headRow = table.rows[0];
	var columnName = prompt("Enter Column Name");
		//	creates a <th> cell
	var headCell = document.createElement("th");
		//	adds the head cell to the end of the header row
	headRow.appendChild(headCell);
	headCell.innerHTML = columnName;
	for(var i = 1; i < numRow; i++)
	{
			//	inserts new cell to the end of row[i]
		var cell = table.rows[i].insertCell(table.rows[i].cells.length);
		cell.innerHTML = "<div contenteditable></div>";
	}
}