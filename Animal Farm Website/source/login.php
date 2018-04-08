<?PHP
header('Content-Type:text/html');
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("../homeapp.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>

      <title>Login</title>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
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
<body class="valign-wrapper">
    
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
                         <li class="tab">
                             <a class="active" href="fg_membersite">Login</a>
                        </li>
                      </ul>
                    </div>
                    <!-- The login form begins -->
                    <div class="card-content">
                        <!-- Form Code Start -->
                        <div id='fg_membersite' class="container">
                        <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>

                        <input type='hidden' name='submitted' id='submitted' value='1'/>

                        <!--<div class='short_explanation'>* required fields</div>-->
                    <!-- error message!!!-->
                        <div style="padding-bottom: 30px;"><span class='error' style="color: #d81b60;"><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                        
                        <!--email-->
                       <div class="input-field center">
                            <label for='email'>E-mail</label>
                            <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
                            <span id='login_username_errorloc' class='error'></span>
                        </div>
                        <!-- password -->
                        <div class="input-field center">
                            <label for='password' >Password</label>
                            <input type='password' name='password' id='password' maxlength="50" /><br/>
                            <span id='login_password_errorloc' class='error'></span>
                        </div>

                        <div class='container center' style="padding-top:20px;">
                            <input class="container btn wave2s-effect waves-light brown" type='submit' name='Login' value='Login' />
                        </div>
                        <div class='short_explanation center' style="padding-top:25px;"><a href='reset-pwd-req.php'>Forgot Password?</a></div>
                        
                        <div class='short_explanation center' style="padding-top:25px;">New here?<a href='register.php'> Register</a></div>
                        </form>
                      
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("email","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>

</body>
</html>