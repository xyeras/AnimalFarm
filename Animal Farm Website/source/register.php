<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("almost-there.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Register</title>
    <!--<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />-->
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Impo1rt materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/custom.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>



<body class ="valign-wrapper">
</script>
<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>


<!-- Form Code Start -->
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
                         <li class="tab"><a class="active" href="fg_membersite">Register</a></li>
                      </ul>
                    </div>
                    <!-- The login form begins -->
                    <div class="card-content">
                        <div id='fg_membersite' class="container">
                            <form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>

                                <input type='hidden' name='submitted' id='submitted' value='1'/>

                                <!--<div class='short_explanation'>* required fields</div>
                                <input class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />-->

                                <!-- place where error msg will show -->
                                <div style="padding-bottom: 30px;"><span class='error' style="color: #d81b60;"><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                                <div class='input-field center'>
                                    <label for='fName'>First Name </label>
                                    <input type='text' name='fName' id='fName' value='<?php echo $fgmembersite->SafeDisplay('fName') ?>' maxlength="50" /><br/>
                                    <span id='register_name_errorloc' class='error'></span>
                                </div>

                                <div class='input-field center'>
                                    <label for='lName'>Last Name </label>
                                    <input type='text' name='lName' id='lName' value='<?php echo $fgmembersite->SafeDisplay('lName') ?>' maxlength="50" /><br/>
                                    <span id='register_name_errorloc' class='error'></span>
                                </div>

                                <div class='input-field center'>
                                    <label for='email'>Email Address</label>
                                    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
                                    <span id='register_email_errorloc' class='error'></span>
                                </div>

                                <div class='input-field center'>
                                    <label for='password'>Password</label>
                                    <!--<div id='thepwddiv' >Password</div>-->

                                    <input type='password' name='password' id='password' maxlength="50" />
                                    <!--<div id='register_password_errorloc' class='error' style='clear:both'></div>-->
                                </div>

                                <div class='container center container' style="padding-top: 20px;">
                                    <input class="container btn waves-effect waves-light brown" type='submit' name='Submit' value='Submit'/>
                                </div>
                                 <div class='short_explanation center' style="padding-top:25px;">Have an account?<a href='login.php'> Log in</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();

    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("fName","req","Please provide your first name");

    frmvalidator.addValidation("lName","req","Please provide your last name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>

</body>

</html>
