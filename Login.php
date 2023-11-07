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

<div class="login-container">
    <h2>Login</h2>
    <form id="login-form">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="login-button">Login
           
        </button>
        <br>
        <a href="#"> forgot password </a><br>
        <br>
        or
        <br>
        <a href="Registration.php"> New user </a>
      
    </form>
</div>
<script src="login.js"></script>
</body>
</html>
