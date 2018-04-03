// retrieves data from the database
$.post("searchTable.php",
{	
	e  : getEmail
},
function(data){
	$('#result').html(data);
});
