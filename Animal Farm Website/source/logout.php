<?PHP
require_once("./include/membersite_config.php");

$fgmembersite->LogOut();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Logout</title>
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
     <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/custom.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
</head>
<body>
  <div class="navbar-fixed">
  <nav class="white">
      <a href="../index.html" class="brand-logo center"><img src="../images/animalFarmLogo.png" style="width: 146px;height:34px;" alt="oink"></a>
  </nav>
 </div>
<div class="center container">
<h3 style="font-weight: 500;">You have logged out</h3>
<i class="material-icons center container" style="color:#00C132; font-size: 80px; padding-bottom:15px;" >check_circle</i><br>
<p>
<a href='login.php'>Login Again</a>
</p>
</div>
</body>
</html>