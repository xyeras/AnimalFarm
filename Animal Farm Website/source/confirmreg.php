<?PHP
require_once("./include/membersite_config.php");

if(isset($_GET['code']))
{
   if($fgmembersite->ConfirmUser())
   {
        $fgmembersite->RedirectToURL("thank-you-regd.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Confirm registration</title>
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

     <!--Import jQuery before materialize.js-->
     <!-- used here for the input animation -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

   <div class="navbar-fixed">
  <nav class="white">
      <a href="../index.html" class="brand-logo center"><img src="../images/animalFarmLogo.png" style="width: 146px;height:34px;" alt="oink"></a>
  </nav>
 </div>
<div id='fg_membersite' class="center container">
<h3 style="font-weight: 500;">Confirm registration</h3>
<p>
Please enter the confirmation code below
</p>

<!-- Form Code Start -->

<form id='confirm' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='get' accept-charset='UTF-8'>
<div><span class='error' style="color: #d81b60;"><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='input-field center container'>
    <label for='code' >Confirmation Code</label>
    <input type='text' name='code' id='code' maxlength="50" />
    <span id='register_code_errorloc' class='error'></span>
</div>
<div class ="center container">
    <input class="btn waves-effect waves-light brown" type='submit' name='Submit' value='Submit' />
</div>

</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("confirm");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("code","req","Please enter the confirmation code");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>
