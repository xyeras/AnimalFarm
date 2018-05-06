function month_stats(mn,d) 
{
	this.month_num = mn;
	this.days = d;
}

//var today = new Date();				// today is a Date object
//var months = today.getMonth()+1;	// gets the current month
//var days = today.getDate();			// gets the current day
//var years = today.getFullYear();	// gets the current year


module.exports = {

    date3:function(months,days,years){
	var temp_days = 0;
    
    var month_curr = months;
    var day_curr = days;
    var year_curr = years;
    var days_til = 20;
	
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
	
	
	return (String(next_month)+"/"+String(next_day)+"/"+String(next_year));
}



   
}