<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

if(isset($_POST['submitted']))
{
   if($fgmembersite->ChangePassword())
   {
        $fgmembersite->RedirectToURL("changed-pwd.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Change password</title>
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script src="scripts/pwdwidget.js" type="text/javascript"></script>
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
     <div class="nav-wrapper container white">
      <a href="index.html" class="brand-logo"><img src="../images/animalFarmLogo.png" style="width: 146px; height: 34px;"alt="oink"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons text" style="color: #d81b60;" >menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../homeapp.php"><i class="material-icons left"  style="color: #d81b60;">dashboard</i></a></li>
        <li><a href="account-settings.php"><i class="material-icons"  style="color: #d81b60;">settings</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
          <li><a class=" makePink text" href="source/account-settings.php">My Account</a></li>
          <li><a class=" makePink text" href="ource/logout.php">Logout</a></li>

      </ul>
    </div>
  </nav>
  </div>
<!-- Form Code Start -->
<div id='fg_membersite' class=" container">
    <h3 style="font-weight: 500; margin-bottom:30px;">Change Password</h3>
<form id='changepwd' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>


<input type='hidden' name='submitted' id='submitted' value='1'/>


<div><span class='error' style="color: #d81b60;"><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class=' input-field left container'>
    <label for='oldpwd' >Old Password</label><br/>
    <div class='pwdwidgetdiv' id='oldpwddiv' ></div><br/>
    <noscript>
    <input type='password' name='oldpwd' id='oldpwd' maxlength="50" />
    </noscript>
    <span id='changepwd_oldpwd_errorloc' class='error'></span>
</div>

<div class='input-field left container'>
    <label for='newpwd' >New Password</label><br/>
    <div class='pwdwidgetdiv' id='newpwddiv' ></div>
    <noscript>
    <input type='password' name='newpwd' id='newpwd' maxlength="50" />
    </noscript>
    <span id='changepwd_newpwd_errorloc' class='error'></span>
</div>

<br/><br/><br/>
<div class=' left container' style ="margin-top:40px;">
    <input class="btn waves-effect waves-light brown" type='submit' name='Submit' value='Submit' />
</div>

</form>

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('oldpwddiv','oldpwd');
    pwdwidget.enableGenerate = false;
    pwdwidget.enableShowStrength=false;
    pwdwidget.enableShowStrengthStr =false;
    pwdwidget.MakePWDWidget();

    var pwdwidget = new PasswordWidget('newpwddiv','newpwd');
    pwdwidget.MakePWDWidget();


    var frmvalidator  = new Validator("changepwd");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("oldpwd","req","Please provide your old password");

    frmvalidator.addValidation("newpwd","req","Please provide your new password");

// ]]>
</script>



</body>
</html>
