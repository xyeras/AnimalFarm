<!--add:This is the page that the user will arrive on when they want to add for the first time. The date button is automatically inserts
the current date for the user.
-->
<!DOCTYPE html>
<html>
<head> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="addData.js"></script> 
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js">
    </script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
    </script>
    <!--animate css -->
    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <title>Add Data</title>
    <style>
        .space button{margin-right:15px;}
        .space button:last-child{margin-right:0px;}

        #notchModal, #penModal, #dateModal, #boarModal, #breedModal, #commentsModal, #tagModal {
          width: 50%;
          left: 25%;
          right: 5%;
        }
        th {
            height: 50px;
        }
        #outer{
            width:100%;
            text-align: center;
        }
        .inner{
            display: inline-flex;
        }     
        .makePink{
           color:#d81b60;
        }
		option1 {
			background-color: pink;
		}

    </style>
</head>   
    <!--All buttons except the first are disabled -->
<body onload="disableBtns()"> 
  <nav>

    <div class="nav-wrapper white">
      <a href="#" class="brand-logo center pink-text">Add Data</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons makePink text">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <li><a class="makePink text" href="homeapp.html">Home</a></li>
        <li><a class="makePink text" href="pigTable.html">View Data</a></li>
		<li><a class="makePink text" href="editData.html">Edit Data</a></li>
      </ul>
     <ul class="side-nav" id="mobile-demo">
       <li><a href="homeapp.html">Home</a></li>
        <li><a href="pigTable.html">View Data</a></li>
		<li><a href="editData.html">Edit Data</a></li>
      </ul>
    </div>
  </nav>
    
    <h5 class="animated bounceInDown header col xl12 light" style="padding-bottom: 50px; padding-top: 50px; text-align:center">Fill in a text field you would like to fill in.</h5>
    <div class="container center" style="padding-top: 40px; padding-left: 400px; padding-right: 400px;">
		<div class="row">
		<form class="col s12">
			<div class="input-field col s12">
			  <input id="Pen" type="text" class="validate" style="padding-left: 40px">
			  <label for="Pen">Pen</label>
			</div>
			<div class="input-field col s12">
			  <input id="Notch" type="text" class="validate" style="padding-left: 40px">
			  <label for="Notch">Notch</label>
			</div>
			<div class="input-field col s12">
			  <input id="tag" type="text" class="validate" style="padding-left: 40px">
			  <label for="tag">Tag</label>
			</div>
		  <div class="input-field col s12">
			<select id = "breedMenu">
			  <option value="" disabled selected>Choose your option</option>
			  <option value="1">Yorkshire</option>
			  <option value="2">Crossbreed</option>
			  <option value="3">Berkshire</option>
			  <option value="4">Chester White and Landrace</option>
			  <option value="5">Spotted Hereford Tamworth</option>
			  <option value="6">Duroc</option>
			  <option value="7">Hampshire</option>
			</select>
			<label>Breed</label>
		  </div>
			<div class="input-field col s12">
			  <input id="date1" type="date" class="validate" style="padding-left: 45px">
			  <label for="date1">Date 1</label>
			</div>
			<div class="input-field col s12">
			  <input id="boar1" type="text" class="validate" style="padding-left: 40px">
			  <label for="boar1">Boar 1</label>
			</div>
			<div class="input-field col s12">
			  <input id="date2" type="date" class="validate" style="padding-left: 45px">
			  <label for="date2">Date 2</label>
			</div>
			<div class="input-field col s12">
			  <input id="boar2" type="text" class="validate" style="padding-left: 40px">
			  <label for="boar2">Boar 2</label>
			</div>
			<div class="input-field col s12">
			  <input id="heat" type="text" class="validate" style="padding-left: 40px">
			  <label for="heat">Heat</label>
			</div>
			<div class="input-field col s12">
			  <input id="date3" type="date" class="validate" style="padding-left: 45px">
			  <label for="date3">Date 3</label>
			</div>
			<div class="input-field col s12">
			  <input id="line" type="text" class="validate" style="padding-left: 40px">
			  <label for="line">Line</label>
			</div>
			<div class="input-field col s12">
			  <input id="newpen" type="text" class="validate" style="padding-left: 40px">
			  <label for="newpen">New Pen</label>
			</div>
			<div class="input-field col s12">
			  <input id="comment" type="text" class="validate" style="padding-left: 40px">
			  <label for="comment">Comments</label>
			</div>
			</div>
		</form>
		</div>
    </div>

   <!-- This is where what the user enter shows up-->    
<div id="outer" class= "container">
    <div class="container" style="padding-top: 40px ">
    
    <table class="bordered centered responsive-table container" style="padding-top: 100px; table-layout:fixed">
            <tr id="myRow">
            </tr>   
        </table>
    </div>
 </div>
    
    
    <div id= "outer" class="container" style="padding-top: 50px; position: relative">
    <button id="add"  data-target="submitModal" class="btn waves-effect waves-light  modal-trigger brown">Submit Data</button> 
        </div>
       
    
  
	<!--Footer-->
        <footer class="page-footer pink darken-1">
           <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Summary</h5>
                <p class="grey-text text-lighten-4">You can use this page to add new data.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright pink darken-1 ">
            <div class="container">
            Animal Farm 2017
            <a class="grey-text text-lighten-4 right" href="index.html">California State University, Fresno</a>
            </div>
          </div>
        </footer>
    
        
<script>

	// Dropdown menu for breed
  $(document).ready(function() {
    $('select').material_select();
  });
</script>

  <!-- Modal Structure for the submit button, will show sucess message and allow user to edit another entry or go back to home -->
  <div id="submitModal" class="modal">
    <div class="modal-content">
      <h4 id ="result">You entry has been sent successfully! <i class="small material-icons green-text">done_all</i></h4>
      <p>Choose if you would like to add another entry or go back to home.</p>
    </div>
    <div class="modal-footer">
      <a href="add.html" class="modal-action modal-close waves-effect waves-green btn-flat">Add Another</a>
      <a href="homeapp.html" class="modal-action modal-close waves-effect waves-green btn-flat">Home</a>
    </div>
  </div>
  
	<!--In order for the page to be mobile friendly I need this JQuery-->
<script>
    $(document).ready(
        function() {
            $(".button-collapse").sideNav();
        });
</script>
    
<!--for the modals to work i need this JQuery-->
<script>
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
    
</script>

</body>    
</html>
