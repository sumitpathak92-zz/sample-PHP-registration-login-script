<?php


include_once 'includes/db_connect.php';
include_once 'includes/commonFunctions_new.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <title>
        Brainstorm - Login(NEW)
    </title>    
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

    
    </head>
    
    <body>
        
        <div class="container">

  <div id="login-form">

    <h3>Login</h3>

    <fieldset>

        <form action="includes/processLogin_new.php" method="post" name = "login_form">

        <input type="email" name = "email" value = ""/>

        <input type="password" name = "password" value = ""/>

        <input type="submit" value="Login" name = "submit" />

        <footer class="clearfix">

          <p><span class="info">?</span><a href="#">Forgot Password</a></p>
          
          


        </footer>

      </form>

    </fieldset>

  </div> 

</div>
    </body>
    
    
</html>
