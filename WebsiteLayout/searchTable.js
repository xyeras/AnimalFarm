// retrieves data from the database
$.get("searchTable.php",function (data)
{
	$('#result').html(data);	
});