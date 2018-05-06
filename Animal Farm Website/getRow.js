// Makes sure the document is ready to be saved and sent
$(document).ready(function(){
	
	//Gets the row number sent from the edit data page
	var rn = window.location.search.substring(8);
	//Takes the row sent from Edit Data, gets the matching row from the Database, 
	$.post("getRow.php",
	{
		rowNum: rn,
        e  : getEmail
	},
	function(data){
		$('#rowData').html(data);
	});
	
});