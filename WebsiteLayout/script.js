// retrieves data from the database
$.get("getData.php",function (data)
{
	$('#result').html(data);	
});