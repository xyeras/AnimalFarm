<script src="jquery-3.2.1.min.js">

$("insertNewRow").click(function(){
	var row = document.getElementById("table1").rows[1];
	$.post("addData.php",
	{
		pen: row.cells[0].innerHTML,
		notch: row.cells[1].innerHTML,
		tag: row.cells[2].innerHTML,
		date1: row.cells[3].innerHTML,
		boar1: row.cells[4].innerHTML,
		date2: row.cells[5].innerHTML,
		boar2: row.cells[6].innerHTML,
		heat: row.cells[7].innerHTML,
		date3: row.cells[8].innerHTML,
		line: row.cells[9].innerHTML,
		newPen: row.cells[10].innerHTML,
		comm: row.cells[11].innerHTML
	},
	function(status)
	{
		alert("Status: " + status);
	});
}
)


</script>