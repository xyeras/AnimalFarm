/*function month_stats(mn,d) 
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
*/



$(document).ready(function ()
{
	$('#add').click(function () // match to id in tag in HTML file
	{
		var num_rows = window.location.search.substring(8);
        var pen    = $('#Pen').val();
        var notch  = $('#Notch').val();
        var tag    = $('#tag').val();
        var breed  = $('#breed').val();
        var date1  = $('#date1').val();
        var boar1  = $('#boar1').val();
		var boar2  = $('#boar2').val();
        var heat   = $('#heat').val();
		var line   = $('#line').val();
		var newPen = $('#newpen').val();
		var comm   = $('#comment').val();
		
		
		var y1 = new Date();
		var m1 = new Date();
		var d1 = new Date();
        var dates;
        var setDate1 = "0";       //date1 is being used
		
	   if (date1)
	   {
	       console.log("in");
	       dates = new Date(date1);
	       
	       if (!!dates.valueOf())
	       {
	           y1 = dates.getFullYear();
	           m1 = dates.getMonth()+1;
	           d1 = dates.getDate()+1;
	       }
	   }
	   // checks if the input pen field is empty
	     if (!pen)
	     {
	         pen = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[0].innerHTML; // gets the first element of the table (pen)
	     }
	     
	     if (!notch)
	     {
	         notch = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[1].innerHTML;
	     }
	     
	     if (!tag)
	     {
	         tag = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[2].innerHTML;
	     }
	     
	     if (!breed)
	     {
	         breed = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[3].innerHTML;
	     }
         
         if (!date1)
         {
             console.log("not");
             date1 = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[4].innerHTML;
             dates = new Date(date1);
             if (!!dates.valueOf())
            {
               y1 = dates.getFullYear();
	           m1 = dates.getMonth()+1;
	           d1 = dates.getDate()+1;
            }
            else
            {
                setDate1 = "1";         // date1 is not being used
                y1 = 0;
                m1 = 0;
                d1 = 0;
            }
         }
	     
	     if (!boar1)
	     {
	         boar1 = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[5].innerHTML;
	     }
	     
	     if (!boar2)
	     {
	         boar2 = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[7].innerHTML;
	     }
	     
	     if (!heat)
	     {
	         heat = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[8].innerHTML;
	     }
	     
	     if (!line)
	     {
	         line = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[10].innerHTML;
	     }
	     
	     if (!newPen)
	     {
	         newPen = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[11].innerHTML;
	     }
		
		if (!comm)
		{
		    comm = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[12].innerHTML;
		}
		
        update1(num_rows,pen,notch,tag,breed,y1,m1,d1,boar1,boar2,heat,line,newPen,comm,setDate1);
});
		
		
});



// updating date2,boar2,     heat,date3,line,newPen,    comm
// automatic enter date2    date3

// date3 is updated to 20 days after date2
// if variable is not NULL 
function update1(num_rows,pen,notch,tag,breed,y1,m1,d1,boar1,boar2,heat,line,newPen,comm,setDate1)
{
	$.post("../updateDB_1.php",
	{
		nr          : num_rows,
        p           : pen,
        n           : notch,
        t           : tag,
        b           : breed,
        y1          : y1,
        m1          : m1,
        d1          : d1,
        b1          : boar1,
		b2          : boar2,
		h           : heat,
		line        : line,
		np          : newPen,
		comm        : comm,
        setDate1    : setDate1
	},
	function (data,status)
	{
		$('#result').html(data); // match in HTML file
	});
}




