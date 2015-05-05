<?php
include_once 'includes/constants.php';
include_once 'includes/db_connect.php';

$connection = mysql_connect(HOST, USER, PASSWORD);
 //check connection
 
 if(!$connection)
 {
     die("Connection failed :" .mysql_error());
     echo "Connected successfully";
 }

$errorMsg = " ";
if(isset($_POST['uName'], $_POST['eMail'], $_POST['password']))
{
    $name = filter_input(INPUT_POST, 'uName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'eMail', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        //invalid email
        $errorMsg .= '<p style="">NOt a valid email, please try again..</p>';
    }
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    
    $checkeMail = "SELECT * FROM users WHERE email = '$email'";
    $checkeMailResult = mysql_query($checkeMail) or die(mysql_error());
    $checkRowsforMail = mysql_num_rows($checkeMailResult);
    
    $checkUsername = "SELECT * FROM users WHERE username = '$name'";
    $checkUsernameResult = mysql_query($checkUsername) or die(mysql_error());
    $checkRowsforName = mysql_num_rows($checkUsernameResult);
    
    if($checkRowsforMail == 1)
    {
        $errorMsg .= 'User with this email already exists..';
        echo $errorMsg;
    }
    if($checkRowsforName == 1)
    {
        $errorMsg .= 'User with username already exists..';
        echo $errorMsg;
    }
    
    if(empty($errorMsg))
    {
        //insert new user into the database
        
        $insertQuery = "INSERT INTO users (username, password, email) VALUES ('$name', '$password', '$email')";
 
        mysql_select_db(DATABASE, $connection);
        
        $retval = mysql_query($insertQuery);
        if(!$retval)
            {
                die("could not enter data " .mysql_error());
                $errorMsg = "Sorry could not connect, please try again..";
            }
        echo "Data Entered successfully";
        $successMessage = "you have been registered successfully";
        echo $successMessage;
        mysql_close($connection);
        $redirectMsg = "Now you will be redirected to login page.. Dont refresh!";
        echo $redirectMsg;
        header("refresh:5;url=login_new.php");
    }
}

//if (!empty($_POST['uName'])) {
//    $name = $_POST['uName'];
//    //echo $name;
//} else {
//    echo $name_error = 'please enter your name!';
//}
//
//if(!empty($_POST['eMail'])){
//    $email = $_POST['eMail'];
//} else {
//    echo $email_error = 'please enter your email!';
//}
//
//if(!empty($_POST['password'])){
//    $password = $_POST['password'];
//} else {
//    echo $pass_error = 'please enter the password';
//}


 
 
 
 
// function checkForExistingUser($email) {
//    //we will check for existing username and email in the database
// 
// $checkQuery = "SELECT * FROM users WHERE email = '$email'";
// $checkQueryResult = mysql_query($checkQuery) or die(mysql_error());
// 
// $affectedRows = mysql_num_rows($checkQueryResult);
// 
// if($affectedRows == 1)
// {
//     die("This user already exists, please try again.." . mysql_error());
// }
//}
 
echo $name ;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
 
?>








