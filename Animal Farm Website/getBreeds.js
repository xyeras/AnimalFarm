var yorkshire;
var crossbred;
var berkshire;
var chester;
var sh;
var duroc;
var hampshire;

$(document).ready(function(){
    getBreeds();
});

function getBreeds()
{
    
    $.post("getBreedY.php",
    {
        e  : getEmail
    },
    function (data)
    {
        yorkshire = data;
    });



    $.post("getBreedCR.php",
    {
        e  : getEmail
    },
    function (data)
    {
        crossbred = data;
    });


    
    $.post("getBreedB.php",
    {
        e  : getEmail
    },
    function (data)
    {
        berkshire = data;
    });


    
    $.post("getBreedCH.php",
    {
        e  : getEmail
    },
    function (data)
    {
        chester = data;
    });


    
    $.post("getBreedSH.php",
    {
        e  : getEmail
    },
    function (data)
    {
        sh = data;
    });


    
    $.post("getBreedD.php",
    {
        e  : getEmail
    },
    function (data)
    {
        duroc = data;
    });


    
    $.post("getBreedH.php",
    {
        e  : getEmail
    },
    function (data)
    {
        hampshire = data;
    });
}




    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {
          console.log("here!!!!!!!!!!!!!!!!!!!!!!");
        console.log(yorkshire);
        console.log(crossbred);
        console.log(berkshire);
        console.log(chester);
        console.log(sh);
        console.log(duroc);
        console.log(hampshire);
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