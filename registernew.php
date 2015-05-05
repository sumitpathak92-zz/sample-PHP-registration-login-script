 <?php 
    include_once 'includes/db_connect.php';
    include_once 'includes/common_functions.php';
    include_once 'includes/register.inc.php';

    sec_session_start();  

    if(login_check($mysqli)==true)
    {
      $logged = 'in';
    }
    else
    {
      $logged = 'out';
    }
?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>BrainstormNation - Login</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

    <link rel="stylesheet" href="css/main(2).css" media="screen" type="text/css" />
    <script type="text/JavaScript" src="js/forms.js"></script>
     <script type="text/JavaScript" src="js/sha512.js"></script>

     <script src="js/jquery.min.js"></script>
     <script src="js/md5.js"></script>

    <script src="js/main(2).js"></script>
</head>

<body>
<?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>

       <!--  <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one upper case letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul> -->
  
  <div class="register-page-container">

  <div id="login-form">

    <h3>Register</h3>

    <fieldset>

      <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form">
                  <div class="lines"> Username:</div>
       <input type="text" 
                name="username" 
                id="username" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "  /> 
                <br>

<div class="lines"> Email Id:</div>
        <input type="email" name = "email" id="email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "  /> <br>

<div class="lines"> Password:</div>
        <input type="password" name = "password" id="password" /> <br>

<div class="lines"> Confirm Password:</div>
        <input type="password" name = "confirmpwd" id="confirmpwd" /> <br>
        <br><br>
        <img src="captcha.php" class="form_captcha" />
        <br>  

        <div class="lines">Enter above text as shown in image:</div>
            <input type="text" name="captcha" value="" class="captcha" />
            <br>

        <input type="submit" value="Register" name = "submit" onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd); checkCaptcha();" />

           <footer class="clearfix">
            <br>
            <br>

            

          
          <p>You are currently logged <?php echo $logged ?>.</p>
          <?php
          if(login_check($mysqli)==true)
          {
             echo '<p>Return to the <a href="index.php">login page</a>.</p>' ;
          }
          ?>
          
          </footer>

      </form>

    </fieldset>

  </div> <!-- end login-form -->

</div>

</body>

</html>