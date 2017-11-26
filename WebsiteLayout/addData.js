
function addNew(p,n,t,d1,b1,c)
{

	$.post("addData.php",
	{	pen		: p,
		notch	: n,
		tag		: t,
		date1	: d1,
		boar1	: b1,
		comments: c
	},
	function(data){
		$('#result').html(data);
	});
}

// Makes sure the document is ready to be saved and sent
$(document).ready(function(){
	//Gets the input from the html file when add button is pressed
	$('#add').click(function() {
		var p 	= $('#pen').val();
		var n 	= $('#notch').val();
		var t 	= $('#tag').val();
		//gets todays date and formats for insertion
			var today = new Date();
			var months = today.getMonth()+1;
			var day = today.getDate();
			var years = today.getFullYear();
		var d1	= String(months) + "/" + String(day) + "/" + String(years);
		var b1	= $('#boar').val();
		var c	= $('#comments').val();
		
		addNew(p,n,t,d1,b1,c);
	});
	
});