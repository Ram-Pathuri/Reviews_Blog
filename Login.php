<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login  page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<!-- The navigation bar -->
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    include 'connection.php';

   
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $check_email_query = "SELECT * FROM reg_info WHERE email='$email' AND password='$password'";
    $result_email_query = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($result_email_query) > 0) {
     
        header("Location: home.php");

    } else
    {
        echo 'Email Wont xists exists';

        
       
    }
      
}
?>


<div class="login-container">
    <h2>Login</h2>
    <form id="login-form" action="Login.php" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="login-button" name="Login" value="login">Login
           
        </button>
        <br>
        <a href="#"> forgot password </a><br>
        <br>
        or
        <br>
        <a href="Registration.php" > New user </a>
      
    </form>
</div>
<script src="login.js"></script>
</body>
</html>
