<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Registration form</title>
</head>
<body>


<!--php code --->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connection.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $verification = md5(rand());

    $check_email_query = "SELECT email FROM reg_info WHERE email='$email' LIMIT 1";
    $result_email_query = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($result_email_query) > 0) {
        echo 'Email already exists';
        header("Location: Registration.php");
    } else {
        // Corrected the number of columns in the INSERT query
        $sql = "INSERT INTO reg_info (username, email, mobile, dob,verification_code,password) VALUES ('$username', '$email', '$mobile', '$dob',  '$verification','$password')";
        
        $sql_query = mysqli_query($con, $sql);

        if ($sql_query) {
            header("Location: Login.php");
        } else {
            echo 'Error: ' . mysqli_error($con);
        }
    }
}
?>




<!--php code ends -->


<div class="login-container">
    <h2>Registration</h2>
    <form id="login-form" action="Registration.php" method="post">

        <div class="form-group">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="login-button" name="register" value="register">Register
           
        </button>
      
    </form>
</div>
</body>
</html>