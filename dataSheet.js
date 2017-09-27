function newRow(){
	var table = document.getElementById("table1");
	var numCol = document.getElementById("table1").rows[0].cells.length;
	var row = table.insertRow(1);
	for (var i = 0; i < numCol; i++)
	{
		var cell = row.insertCell(i);
		cell.innerHTML = "";
		cell.contentEditable = "true";
	}
}

function newColumn(){
	var table = document.getElementById("table1");
	var numRow = table.rows.length;
	var headRow = table.rows[0];
	var columnName = prompt("Enter Column Name");
	var headCell = document.createElement("th");
	headRow.appendChild(headCell);
	headCell.innerHTML = columnName;
	for(var i = 1; i < numRow; i++)
	{
		var cell = table.rows[i].insertCell(table.rows[i].cells.length);
		cell.innerHTML = "";
		cell.contentEditable = "true";
	}
}