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

<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
     <!--Let browser know website is optimized for mobile
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     CSS  -->
 <!-- <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
  <title>Edit Page</title>

<!--	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--animate css -->
    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<style>
.makePink{
     color:#d81b60;
}

/*Css for selsecting row*/

tr.selected {
    background-color: #d81b60 !important;
    color: #FFF;
}

</style>

<script type="text/javascript" class="init">
//$('#table1').DataTable({select:true});


function edButton(x) {

    var val = $(x).attr('data-value');
    $(x).addClass('selected');
    $(x).siblings().removeClass('selected');


        // active edit button when a row is selected
        document.getElementById("insem").disabled = false;

        // When there was two buttons need for cases
    /* id date 3 is emepty it means that it should take them to page to add date 2 boar2 and date 3 page */
          //  if(x[8].innerHTML == ''){
          //       document.getElementById("insem").disabled = false;
          //       document.getElementById("last3").disabled = true;
          //  }
            /* if heat is filled in it means they just want to edit line pen or comment*/
          //  else if(x[7].innerHTML != ''){
          //       document.getElementById("last3").disabled = false;
        //        document.getElementById("insem").disabled = true;
         //   }

    document.getElementById('rowNum').value = val;
//	document.getElementById('rowNum2').value = val;

	//e.target.parentNode.className = 'selected';
}

</script>
<script src="editData.js"></script>
<style>.makePink{color:#d81b60;}</style>
</head>

<!-- On page load all the buttons are disabled -->
<body onload="disableAll()">
<!--Top Header-->
     <div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper white">
        <center><a href="#" class="brand-logo center pink-text">Edit Data</a></center>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons makePink text">menu</i></a>
        <ul class="right hide-on-med-and-down">

        <li><a class="makePink text" href="homeapp.php">Home</a></li>
        <li><a class="makePink text" href="pigTable.php">View Data</a></li>
        <li><a class="makePink text" href="add.php">Add Data</a></li>
      </ul>
     <ul class="side-nav" id="mobile-demo">
       <li><a href="homeapp.php">Home</a></li>
        <li><a href="pigTable.php">View Data</a></li>
		<li><a href="add.php">Add Data</a></li>
      </ul>
    </div>
  </nav>
    </div>

<!--Search table-->
 <script src="searchData.js"></script>
  <script src="searchTable.js"></script>
 <!-- where the table from the database will be printed
 <div id = "putTableHere"></div>-->
<div class = "container container" style="padding-top: 13px;">
        <div class=" center container">
    <label class = "left makePink text">Search By: </label>
    <select id="specifier" class="browser-default responsive">
      <option value="0">Every Column</option>
      <option value="1">Pen</option>
      <option value="2">Notch</option>
      <option value="3">Tag</option>
	  <option value="4">Breed</option>
	  <option value="5">Date</option>
      <option value="6">Boar 1</option>
	  <option value="7">Date 2</option>
	  <option value="8">Boar 2</option>
	  <option value="9">Heat</option>
	  <option value="10">Date 3</option>
	  <option value="11">Line</option>
	  <option value="12">New Pen</option>
	  <option value="13">Comment</option>
    </select>
</div></div>
<br/>
<div id="bodyOfPage" style="padding-bottom: 20px" class=" center container">
        <div>
        <input type="text center" id="searchTerm" placeholder="Search.." onkeyup="searchData()">
        </div>
<!--<div class="container" style=" padding-bottom: 5px; padding-left: 500px">
<input type="text center" id="searchTerm" placeholder="Search the data to be Edit.." onkeyup="searchData()"></div>-->


</div>
<div id = "result"></div>
<br/>
<style>h1 {margin: 40px 0 0 550px;}</style>
<style>h2 {margin: 40px 0 0 100px;}</style>



    <div class="container center" >
     <form action="addMore.html" style="padding-bottom: 20px; padding-top:40px;">
         <input id="rowNum" type="hidden" name="rowNum" value="0">
        <button id="insem" type="submit" value="insem" class="waves-effect waves-light btn-large brown " style="padding-top: 0px;" onclick = showdata()>Edit Row</button>
    </form>
    <!--
    <form action= "alwaysAdd.html">
        <input id="rowNum2" type="hidden" name="rowNum" value="0">
    <button id="last3" type="submit" value="last3" class="waves-effect waves-light btn-large brown" style="padding-top: 0px;">Edit Last 3 columns</button>
    </form>
    -->
    </div>

     <script>
        /* disables all buttons on load*/
        function disableAll(){
            document.getElementById("insem").disabled = true;
          //document.getElementById("last3").disabled = true;

        }

    </script>
<!--
<form id="editForm" class="container center" style="padding-bottom: 20px;" action="addMore.html">
	<input id="rowNum" type="hidden" name="rowNum" value="0">
	<input id="submit" type="submit" value="Edit Data" class="conwaves-effect waves-light btn-large brown disabled">
</form>

-->
<!--Bottom header-->
        <footer class="page-footer pink darken-1 ">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Summary</h5>
                <p class="grey-text text-lighten-4">You can use this page to search data then edit entries.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright pink darken-1">
            <div class="container">
            Animal Farm 2017
            <a class="grey-text text-lighten-4 right" href="#!">California State University, Fresno</a>
            </div>
          </div>
        </footer>

<script>
 $(document).ready(function() {
    //Makes the select tag work
    $('select').material_select();
    $(".button-collapse").sideNav();
});
 </script>

	</body>
</html>
