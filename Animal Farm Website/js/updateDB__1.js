$(document).ready(function ()
{
	$('#add').click(function () // match to id in tag in HTML file
	{
		var num_rows = window.location.search.substring(8);
        var pen    = $('#Pen').val();
        var notch  = $('#Notch').val();
        var tag    = $('#tag').val();
        var breed  = $("#breedMenu option:selected").text();
        var date1  = $('#date1').val();
        var boar1  = $('#boar1').val();
        var date2  = $('#date2').val();
		var boar2  = $('#boar2').val();
        var heat   = $('#heat').val();
        var date3  = $('#date3').val();
		var line   = $('#line').val();
		var newPen = $('#newpen').val();
		var comm   = $('#comment').val();
		
		
		var y1;
		var m1;
		var d1;
        var Dates1;
        
        var y2;
        var m2;
        var d2;
        var Dates2;
        
        var y3;
        var m3;
        var d3;
        var Dates3;
        
        var isDate1Valid = "0";       // no input for date(1,2,or 3) and nothing in column date(1,2,or 3) from the row
        var isDate2Valid = "0";
        var isDate3Valid = "0";
		
	   if (date1)
	   {
	       Dates1 = new Date(date1); //taking the date like this subtracts the day of the month by 1
	       
	       if (!!Dates1.valueOf())   // checks for a valid date
	       {
	           y1 = Dates1.getFullYear();
	           m1 = Dates1.getMonth()+1;
	           d1 = Dates1.getDate()+1;
	       }
	   }
       
       if (date2)
       {
           Dates2 = new Date(date2);

           if (!!Dates2.valueOf())
           {
               y2 = Dates2.getFullYear();
               m2 = Dates2.getMonth()+1;
               d2 = Dates2.getDate()+1;
           }
       }
       
       if (date3)
       {
           Dates3 = new Date(date3);
           if (!!Dates3.valueOf())
           {
               y3 = Dates3.getFullYear();
               m3 = Dates3.getMonth()+1;
               d3 = Dates3.getDate()+1;
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
	     
	     if (breed == "Choose your option")
	     {
	         breed = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[3].innerHTML;
	     }
         
         if (!date1)
         {
             date1 = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[4].innerHTML;
             Dates1 = new Date(date1);
             if (!!Dates1.valueOf())
            {
               y1 = Dates1.getFullYear();
	           m1 = Dates1.getMonth()+1;
	           d1 = Dates1.getDate();
            }
            else
            {
                isDate1Valid = "1";         
                y1 = 0;
                m1 = 0;
                d1 = 0;
            }
         }
	     
	     if (!boar1)
	     {
	         boar1 = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[5].innerHTML;
	     }
         
         if (!date2)
         {
             date2 = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[6].innerHTML;
             Dates2 = new Date(date2);
             if (!!Dates2.valueOf())
             {
                 y2 = Dates2.getFullYear();
                 m2 = Dates2.getMonth()+1;
                 d2 = Dates2.getDate();
             }
             else
             {
                 isDate2Valid = "1";
                 y2 = 0;
                 m2 = 0;
                 d2 = 0;
             }
         }
	     
	     if (!boar2)
	     {
	         boar2 = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[7].innerHTML;
	     }
	     
	     if (!heat)
	     {
	         heat = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[8].innerHTML;
	     }
	     
	     if (!date3)
         {
             date3 = (document.getElementsByTagName("tr")[1]).getElementsByTagName("td")[9].innerHTML;
             Dates3 = new Date(date3);
             if (!!Dates3.valueOf())
             {
                 y3 = Dates3.getFullYear();
                 m3 = Dates3.getMonth()+1;
                 d3 = Dates3.getDate();
             }
             else
             {
                 isDate3Valid = "1";
                 y3 = 0;
                 m3 = 0;
                 d3 = 0;
             }
           
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
		
        update1(num_rows,pen,notch,tag,breed,y1,m1,d1,boar1,y2,m2,d2,boar2,heat,y3,m3,d3,line,newPen,comm,isDate1Valid,isDate2Valid,isDate3Valid);
});
		
		
});




function update1(num_rows,pen,notch,tag,breed,y1,m1,d1,boar1,y2,m2,d2,boar2,heat,y3,m3,d3,line,newPen,comm,isDate1Valid,isDate2Valid,isDate3Valid)
// updating date2,boar2,     heat,date3,line,newPen,    comm
// automatic enter date2    date3

// date3 is updated to 20 days after date2
// if variable is not NULL
{
	$.post("../updateDB_1.php",
	{
		nr           : num_rows,
        p            : pen,
        n            : notch,
        t            : tag,
        b            : breed,
        y1           : y1,
        m1           : m1,
        d1           : d1,
        b1           : boar1,
        y2           : y2,
        m2           : m2,
        d2           : d2,
		b2           : boar2,
		h            : heat,
        y3           : y3,
        m3           : m3,
        d3           : d3,
		line         : line,
		np           : newPen,
		comm         : comm,
        isDate1Valid : isDate1Valid,
        isDate2Valid : isDate2Valid,
        isDate3Valid : isDate3Valid
	},
	function (data,status)
	{
		$('#result').html(data); // match in HTML file
	});
}


