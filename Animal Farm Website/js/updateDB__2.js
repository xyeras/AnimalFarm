
$(document).ready(function ()
{
	$('#subBtn').click(function () // match to id in tag in HTML file
	{
		var num_rows = $(document.getElementById('row1')).attr('value');
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
	function (date,status)
	{
        alert(status);
		$('#result').html(data); // match in HTML file
	});
}



