var hi = 0;
function month_stats(mn,d) 
{
	this.month_num = mn;
	this.days = d;
}

	var today = new Date();
	var months = today.getMonth()+1;
	var days = today.getDate();
	var years = today.getFullYear();
	
	next_date(months,days,years,27);
	
	

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
	
	if (year_count == year_curr)
		var feb = new month_stats(2,29);
	else	
		var feb = new month_stats(2,28);
	
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
	
	if (month_curr == jan.month_num)
	{
		temp_days = day_curr + days_til;
		if (temp_days > jan.days)
		{
			next_month = 2;
			next_day   = temp_days - jan.days;
			next_year  = year_curr;
		}
		else
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
			next_year  = year_curr + 1;
		}
		else
		{
			next_month = month_curr;
			next_day   = temp_days;
			next_year  = year_curr;
		}
	}
	
	// saves calculated date in one variable
	document.write("next month: " + next_month + " next day: " + next_day + " next year: " + next_year);
//	var futr_date = 
//	{
//		futr_month: next_month,
//		futr_day  : next_day,
//		futr_year : next_year
//	};
		
}





