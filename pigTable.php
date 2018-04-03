<?PHP
require_once("source/include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("source/login.php");
    exit;
}
$email = $_SESSION[$fgmembersite->GetLoginSessionVar()];
?>
<script type="text/javascript">
    var getEmail = "<?php echo $email; ?>";
</script>

<!-- test for View Data-->

<!DOCTYPE html>
  <html lang="en">
    <head>
        
         
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    
    <!--for google charts-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    </script>
         <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js">
    </script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--animate css -->
    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"/>
	  <link rel="stylesheet" href="css/custom.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
      <style>
          .makePink{
           color:#d81b60;
          }
      
      </style>

    <body>

	 <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper white">
        <a href="#" class="brand-logo center pink-text">View Recent Data</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons makePink text">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          
        <li><a class="makePink text" href="homeapp.html">Home</a></li>
        <li><a class="makePink text" href="add.html">Add Data</a></li>
		<li><a class="makePink text" href="editData.html">Edit Data</a></li>
      </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="homeapp.html">Home</a></li>
        <li><a href="add.html">Add Data</a></li>
		<li><a href="editData.html">Edit Data</a></li>
      </ul>
    </div>
  </nav>
        </div>
		
	<div id="result"></div>
	<div class = "container" id="piechart" style="width: 900px; height: 500px;"></div>
	
	
        <footer class="page-footer pink darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Summary</h5>
                <p class="grey-text text-lighten-4">You can use this page to view the 10 most recent entries.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright pink darken-1">
            <div class="container">
            Animal Farm 2017
            <a class="grey-text text-lighten-4 right" href="index.html">California State University, Fresno</a>
            </div>
          </div>
        </footer>
	<script>
    $(document).ready(
        function() {
          
            $(".button-collapse").sideNav();
        });
    
      
</script>
    
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>	
      <!--Link to js file to get data from the database-->
      <script src = "script.js"></script>
      <script src="getBreeds1.js"></script>
	
    </body>
  </html>
