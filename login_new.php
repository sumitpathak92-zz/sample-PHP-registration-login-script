<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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

    <script type="text/JavaScript" src="js/forms.js"></script>
     <script type="text/JavaScript" src="js/sha512.js"></script>
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
<!--          
          
//        if (isset($_GET['error'])) {
//            echo '<p class="error" style="color:red;">Error Logging In!</p>';
//        }
//        ?>

        </footer>

      </form>

    </fieldset>

  </div> <!-- end login-form -->

</div>
    </body>
    
    
</html>
