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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
    <script src= "heatChecks1.js"></script>
    <!--animate css -->
    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
     <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- CSS  -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <title>Dashboard-Animal Farm</title>
</head>
   <style>
    .makePink {
        color:#d81b60;

    }
    #bt1, #bt2, #bt3, #bt4 {
        margin:5px;
    }


    h5 {
        text-shadow: 0 2px 0 black;
    }

    .bg {
    /* The image used */
    background-image: linear-gradient(
      rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)
    ),
    url('./images/pignose.jpeg');

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    }
       span.badge {
           line-height: 15px;
           height: 15px;
       }


    </style>
<body class="bg">
       <div class="navbar-fixed">
    <nav class="white">
     <div class="nav-wrapper container white">
      <a href="index.html" class="brand-logo"><img src="images/animalFarmLogo.png" style="width: 146px; height: 34px; margin-top:10px;"alt="oink"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons makePink text">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="source/account-settings.php"><i class="material-icons makePink">settings</i></a></li>
        <li><a href="source/logout.php"><i class="material-icons makePink">power_settings_new</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
          <li><a class=" makePink text" href="source/account-settings.php">My Account</a></li>
          <li><a class=" makePink text" href="source/logout.php">Logout</a></li>

      </ul>
    </div>
  </nav>
  </div>

<!-- will be adding changes to background -->
<div class="row center" style="margin-top: 50px" id="fg_membersite_content">
    <h5 class="animated slideInDown header col s12 light white-text">Hello, <?= $fgmembersite->UserFullName(); ?>!</h5>

     <h5 class="animated slideInDown header col s12 light white-text" style="padding-bottom:15px; padding-top:25px;" >A click away from all your agricultural data</h5>
       <div id="main-btns" class="container center" style= "padding-top: 110px; padding-bottom: 270px">

        <a id="bt1" class="waves-effect waves-light btn-large pink darken-1" href="pigTable.php"><i class="material-icons left">visibility</i>View Data</a>
        <a id="bt2" class="waves-effect waves-light btn-large pink darken-1" href="add.php"><i class="material-icons left">add</i>Add Data</a>
        <a id="bt3" class="waves-effect waves-light btn-large pink darken-1" href="editData.php"><i class="material-icons left">create</i>Edit Data</a>
           <!--the number for the badge will be changed accordingly -->
         <a id="bt4" class="waves-effect waves-light btn-large pink darken-1" href="heatTable.php"><i class="material-icons left">whatshot</i><span id = "result" class="new badge green" style="margin-left: 20px; right:0px;"></span>Heat Checks</a>

    </div>

</div>


    <div class="footer-copyright">
      <div class="container row center white-text" ><a style="color: #ffffff" href="index.html"> California State University, Fresno <br/>
          2017 Animal Farm</a>


      </div>
    </div>



    </body>
