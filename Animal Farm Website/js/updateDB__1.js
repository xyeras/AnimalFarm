




$(document).ready(function ()
{
	$('#add').click(function () // match to id in tag in HTML file
	{
		var num_rows = $(document.getElementById('row1')).attr('value');
        var pen    = $('#pen').val();
        var notch  = $('#notch').val();
        var tag    = $('#tag').val();
        var breed  = $('#breed').val();
        var boar1  = $('#boar1').val();
		var boar2  = $('#boar2').val();
        var heat   = $('#heat').val();
		var line   = $('#line').val();
		var newPen = $('#newPen').val();
		var comm   = $('#comments').val();
		
	

	
			
        update1(num_rows,pen,notch,tag,breed,boar1,boar2,heat,line,newPen,comm);
});
		
		
});



// updating date2,boar2,     heat,date3,line,newPen,    comm
// automatic enter date2    date3

// date3 is updated to 20 days after date2
// if variable is not NULL 
function update1(num_rows,pen,notch,tag,breed,boar1,boar2,heat,line,newPen,comm)
{
	$.post("../updateDB_1.php",
	{
		nr          : num_rows,
        p           : pen,
        n           : notch,
        t           : tag,
        b           : breed,
        b1          : boar1,
		b2          : boar2,
		h           : heat,
		line        : line,
		np          : newPen,
		comm        : comm
	},
	function (data,status)
	{
		$('#result').html(data); // match in HTML file
	});
}




