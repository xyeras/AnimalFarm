// retrieves data from the database
$.post("getData.php",
{	
	e  : getEmail
},
function(data){
	$('#result').html(data);
});
