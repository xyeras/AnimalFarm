function month_stats(mn,d) 
{
	this.month_num = mn;
	this.days = d;
}

function date_holder (mm,dd,yyyy)
{
	this.month = mm;
	this.day   = dd;
	this.year  = yyyy;
}

var today = new Date();				// today is a Date object
var months = today.getMonth()+1;	// gets the current month
var days = today.getDate();			// gets the current day
var years = today.getFullYear();	// gets the current year



function next_date(month_curr, day_curr, year_curr,days_til)
{
	var temp_days = 0;
	
	// next_**** hold date that will be returned
	var next_month;
	var next_day;
	var next_year;
	
	// initialize months
	var jan = new month_stats(1,31);
	
	var year_count = 1900;		// base year for determining the leap year
	
	// determines if it is a leap year/how many days in feb
	while (year_count < year_curr)
	{
		year_count = year_count + 4;
		if (year_count == (year_curr-1) || year_count == (year_curr-2) || year_count == (year_curr-3))
			break;	
	}	
	
	var feb = new month_stats(0,0);
	
	if (year_count == year_curr)
	{
		feb.month_num = 2;
		feb.days = 29;
	}
	else	
	{
		feb.month_num = 2;
		feb.days = 28;
	}
	// continues to initialize months
	var mar = new month_stats(3,31);
	var apr = new month_stats(4,30);
	var may = new month_stats(5,31);
	var jun = new month_stats(6,30);
	var jul = new month_stats(7,31);
	var aug = new month_stats(8,31);
	var sep = new month_stats(9,30);
	var oct = new month_stats(10,31);
	var nov = new month_stats(11,30);
	var dec = new month_stats(12,31);
	
	// calculated next date
	if (month_curr == jan.month_num)		// matches the current month
	{
		temp_days = day_curr + days_til;	// checks if the next date is in the next month
		if (temp_days > jan.days)			// calculates next month's day and set month num
		{
			next_month = 2;
			next_day   = temp_days - jan.days;
			next_year  = year_curr;
		}
		else								// caculates day in the current month
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}	
	
	else if (month_curr == feb.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > feb.days)
		{
			next_month = 3;
			next_day   = temp_days - feb.days;
			next_year  = year_curr;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}

	else if (month_curr == mar.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > mar.days)
		{
			next_month = 4;
			next_day   = temp_days - mar.days;
			next_year  = year_curr;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	
	else if (month_curr == apr.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > apr.days)
		{
			next_month = 5;
			next_day   = temp_days - apr.days;
			next_year  = year_curr;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	
	else if (month_curr == may.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > may.days)
		{
			next_month = 6;
			next_day   = temp_days - may.days;
			next_year  = year_curr;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	else if (month_curr == jun.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > jun.days)
		{
			next_month = 7;
			next_day   = temp_days - jun.days;
			next_year  = year_curr;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	
	else if (month_curr == jul.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > jul.days)
		{
			next_month = 8;
			next_day   = temp_days - jul.days;
			next_year  = year_curr;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	
	else if (month_curr == aug.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > aug.days)
		{
			next_month = 9;
			next_day   = temp_days - aug.days;
			next_year  = year_curr;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	
	else if (month_curr == sep.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > sep.days)
		{
			next_month = 10;
			next_day   = temp_days - sep.days;
			next_year  = year_curr;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	
	else if (month_curr == oct.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > oct.days)
		{
			next_month = 11;
			next_day   = temp_days - oct.days;
			next_year  = year_curr;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	
	else if (month_curr == nov.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > nov.days)
		{
			next_month = 12;
			next_day   = temp_days - nov.days;
			next_year  = year_curr;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	
	else if (month_curr == dec.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > dec.days)
		{
			next_month = 1;
			next_day   = temp_days - dec.days;
			next_year  = year_curr + 1;			// increments year 
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	
	// save the date
	var new_date = new date_holder(next_month,next_day,next_year);
	return new_date;
}




$(document).ready(function ()
{
	$('#update').click(function () // match to id in tag in HTML file
	{
		var num_rows = $('#num_rows').val();
		var boar2  = $('#boar2').val();
		// only need date3 to check when to update date2 and date3
		var date3  = $('#date3').val();
		var heat   = $('#heat').val();
		var line   = $('#line').val();
		var newPen = $('#newPen').val();
		var comm   = $('#comm').val();
		
		// call the next_date function-----------------------------------------
		var retrieve_date = next_date(months,days,years,20);
		if (boar2 != NULL && date3 == NULL)
		{
			date2_month = String(months);
			date2_day   = String(days);
			date2_year  = String(years);
			date3_month = retrieve_date.month;
			date3_day   = retrieve_date.day;
			date3_year  = retrieve_date.year;
			
			update1(num_rows,date2_month,date2_day,date2_year,boar2,date3_month,date3_day,date3_year,line,newPen,comm);
		}
		else if (date3 != NULL && heat == NULL)
		{
			update2(num_rows,heat,line,newPen,comm);
		}
		else
		{
			update3(num_rows,line,newPen,comm);
		}
		// call update function (2 functions????? 2 php files???????)
	});
});



// updating date2,boar2,     heat,date3,line,newPen,    comm
// automatic enter date2    date3

// date3 is updated to 20 days after date2
// if variable is not NULL 
function update1(num_rows,date2_month,date2_day,date2_year,boar2,date3_month,date3_day,date3_year,line,newPen,comm)
{
	$.post("updateDB_1.php",
	{
		nr          : num_rows,
		date2_month : date2_month,
		date2_day   : date2_day,
		date2_year  : date2_year,
		b2          : boar2,
		date3_month : date3_month,
		date3_day   : date3_day,
		date3_year  : date3_year,
		line        : line,
		np          : newPen,
		comm        : comm
	},
	function (date)
	{
		$('#result').html(data); // match in HTML file
	});
}

function update2(num_rows,heat,line,newPen,comm)
{
	$.post("updateDB_2.php",
	{
		nr   : num_rows,
		h    : heat,
		line : line,
		np   : newPen,
		comm : comm
	},
	function (date)
	{
		$('#result').html(data); // match in HTML file
	});
}

function update3(num_rows,line,newPen,comm)
{
	$.post("updateDB_3.php",
	{
		nr   : num_rows,
		line : line,
		np   : newPen,
		comm : comm
	},
	function (date)
	{
		$('#result').html(data); // match in HTML file
	});
}


