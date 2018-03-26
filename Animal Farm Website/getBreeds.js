var yorkshire;
var crossbred;
var berkshire;
var chester;
var sh;
var duroc;
var hampshire;

$.get("getBreedY.php",function (data)
{
	yorkshire = data;
});


$.get("getBreedCR.php",function (data)
{
	crossbred = data;
});


$.get("getBreedB.php",function (data)
{
	berkshire = data;
});


$.get("getBreedCH.php",function (data)
{
	chester = data;
});


$.get("getBreedSH.php",function (data)
{
	sh = data;
});


$.get("getBreedD.php",function (data)
{
	duroc = data;
});


$.get("getBreedH.php",function (data)
{
	hampshire = data;
});




    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {
          
        
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Yorkshire',                     parseInt(yorkshire)],
          ['Crossbreed',                    parseInt(crossbred)],
          ['Berkshire',                     parseInt(berkshire)],
          ['Chester White and Landrace',    parseInt(chester)],
          ['Spotted Hereford Tamworth',     parseInt(sh)],
          ['Duroc',                         parseInt(duroc)],
          ['Hampshire',                     parseInt(hampshire)]
        ]);

        var options = {
        
          title: 'Breeds'};

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }