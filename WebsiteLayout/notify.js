var today = new Date();				// today is a Date object
var months = today.getMonth()+1;	// gets the current month
var days = today.getDate();			// gets the current day
var years = today.getFullYear();	// gets the current year

// saves date in one variable
var heatDate = String(months) + "/" + String(days) + "/" + String(years);


// retrieves data from the database
// we use .post here to send variable to search data table with
$.post("notify.php",
{
	heat_date: heatDate
},
function (data)
{
	$('#result').html(data);	// change '#result in HTML file'
});