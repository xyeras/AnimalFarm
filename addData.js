
function addNew(p,n,t,d1,b1,br,c)
{
	var e = "<?php echo $fgmembersite->UserEmail() ?>"
	$.post("addData.php",
	{	pen		: p,
		notch	: n,
		tag		: t,
		date1	: d1,
		boar1	: b1,
		breed	: br,
		comments: c,
		email	: e
	},
	function(data, status){
	    alert("Status: " + status);
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
		var d1	= $('#date').val();
		var b1	= $('#boar').val();
		var br	= $('#breed').val();
		var c	= $('#comments').val();
		
		addNew(p,n,t,d1,b1,br,c);
	});
	
});