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

<!-- this page will show all the pigs that need heat checks -->

<!DOCTYPE html>
  <html lang="en">
    <head>
        
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
     <script src="notify1.js"></script> 
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
        <title>Heat Checks Needed</title>
        
        <style>
          .makePink{
           color:#d81b60;
          }
          #outer{
            width:100%;
            text-align: center;
        }
        tr.selected {
            background-color: #d81b60 !important;
            color: #FFF;
        }
      </style>
        
        <script>
            
            function sendRow(x) {
                var val = $(x).attr('value');
                $(x).addClass('selected');
                $(x).siblings().removeClass('selected');
                
                document.getElementById("heat").disabled = false;
                 
                document.getElementById('rowNum').value = val;
            }
            
        </script>
    </head>
      

    <body onload = disableAll()>
        
	 <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper white">
        <a href="#" class="brand-logo center pink-text">Heat Checks Needed</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons makePink text">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          
        <li><a class="makePink text" href="homeapp.php">Home</a></li>
        <li><a class="makePink text" href="add.php">Add Data</a></li>
		<li><a class="makePink text" href="editData.php">Edit Data</a></li>
      </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="homeapp.php">Home</a></li>
        <li><a href="add.php">Add Data</a></li>
		<li><a href="editData.php">Edit Data</a></li>
      </ul>
    </div>
  </nav>
        </div>
	<h5 class="animated bounceInDown header col xl12 light" style="padding-bottom: 50px; padding-top: 50px; text-align:center">Simply select which entry you would like to complete the heat check for.</h5>	
	
        <div id="notify"></div>
        
        <!--this is the button that collectes the selected data from the row and takes user to "comHeatCheck.html"-->
        
        <div id="outer" class="container">
             <form action="comHeatCheck.php">
                  <input id="rowNum" type="hidden" name="rowNum" value="0">
                    <br/>
                <button id="heat" type="submit" value="heat" class="waves-effect waves-light btn brown " style="padding-top: 0px;">Check Heat</button>
            </form>
        <!--<a  href="comHeatCheck.html" class="waves-effect waves-light btn brown">Check Heat</a>-->
        </div>
        
        <script>
            function disableAll(){
            document.getElementById("heat").disabled = true;
        }   
        </script>
	
	
        <footer class="page-footer pink darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Summary</h5>
                <p class="grey-text text-lighten-4">You can use this page to see all the pigs that need heat checks for the day that the heat check needs to be performed.</p>
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
	
    </body>
  </html>
