<?PHP
require_once("./include/membersite_config.php");

$emailsent = false;
if(isset($_POST['submitted']))
{
   if($fgmembersite->EmailResetPasswordLink())
   {
        $fgmembersite->RedirectToURL("reset-pwd-link-sent.html");
        exit;
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Reset Password Request</title>
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>>
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
<body class = "valign-wrapper">
  <!--Import jQuery before materialize.js-->                    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
<!-- set up the materialzie card -->
<div class= "container">
    <div class = "row valign-wrapper">
        <div class="col s8 offset-s3 valign">
            <div class="card hoverable valign container">
                <div class="card-content center">
                    <a href="../index.html">
                    <img src="../images/animalFarmLogo.png" style = "width: 156px; height:34px;" alt = "oink"></a>
                </div>
                    <!-- card title, only one tab-->
                    <div class="card-tabs">
                      <ul class="tabs tabs-fixed-width">
                         <li class="tab">
                             <a class="active" href="fg_membersite">Reset Password</a>
                        </li>
                      </ul>
                    </div>
                    <div class= "card-content">
                    <!-- the reset form begins here -->
                    <div id='fg_membersite' class = "container">
                        <form id='resetreq' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
        
                        <input type='hidden' name='submitted' id='submitted' value='1'/>

                        <div><span class='error' style="color: #d81b60;"><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                        <!-- error for when user doesnt enter an email address-->
                        <div style ="padding-bottom:20px;" class="center">
                        <span id='resetreq_email_errorloc' class='error' style="color: #d81b60;"></span></div>

                        <div class="input-field center">
                            <label for='username'>Your Email</label>
                            <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" />
                        </div>
                        <div class='short_explanation center'>A link to reset your password will be sent to the email address</div>
                         <div class='container center' style="padding-top:20px;">
                            <input class="container btn wave2s-effect waves-light brown" type='submit' name='Submit' value='Submit' />
                        </div>
                        </form>
                      </div>
                  </div>
            </div>
       </div>
    </div>
</div>
    

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("resetreq");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("email","req","Please provide the email address used to sign-up");
    frmvalidator.addValidation("email","email","Please provide the email address used to sign-up");

// ]]>
</script>

</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>