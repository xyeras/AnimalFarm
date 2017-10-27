
function addNew(p,n,t,d1,b1,d2,b2,h,d3,l,nP,c)
{

	$.post("addData.php",
	{	pen		: p,
		notch	: n,
		tag		: t,
		date1	: d1,
		boar1	: b1,
		date2	: d2,
		boar2	: b2,
		heat	: h,
		date3	: d3,
		line	: l,
		newPen	: nP,
		comm	: c	
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
		var d1	= $('#date1').val();
		var b1	= $('#boar1').val();
		var d2	= $('#date2').val();
		var b2	= $('#boar2').val();
		var h 	= $('#heat').val();
		var d3	= $('#date3').val();
		var l 	= $('#line').val();
		var nP	= $('#newPen').val();
		var c 	= $('#comm').val();
		
		addNew(p,n,t,d1,b1,d2,b2,h,d3,l,nP,c);
	});
	
});