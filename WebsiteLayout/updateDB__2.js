
$(document).ready(function ()
{
	$('#update').click(function () // match to id in tag in HTML file
	{
		var num_rows = $('#num_rows').val();
		var heat   = $('#heat').val();
		var line   = $('#line').val();
		var newPen = $('#newPen').val();
		var comm   = $('#comm').val();
		

		update(num_rows,heat,line,newPen,comm);
	});
});



function update(num_rows,heat,line,newPen,comm)
{
	$.post("updateDB_2.php",
	{
		nr   : num_rows,
		h    : heat,
		line : line,
		np   : newPen,
		comm : comm
	},
	function (date)
	{
		$('#result').html(data); // match in HTML file
	});
}



