var today = new Date();				// today is a Date object
var months = today.getMonth()+1;	// gets the current month
var days = today.getDate();			// gets the current day
var years = today.getFullYear();	// gets the current year

// saves date in one variable
var heatDate = String(months) + "/" + String(days) + "/" + String(years); // need to check if month & day is 06 or 6 (not much of a concern since varible is determined by method Date) for consistency of writing


// retrieves data from the database
// we use .post here to send variable to search data table with
$.post("heatChecks.php",
{
	months: String(months),
	days: String(days),
	years: String(years),
    e  : getEmail
},
function (data)
{
	$('#result').html(data);	// change '#result in HTML file'
});