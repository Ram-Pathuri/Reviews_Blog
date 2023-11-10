<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">

</head>
<body style="background-color:white;">

<div class="navbar">
  <a href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">
    <?php
// Start the session
session_start();

// Check if the 'name' session variable is set
if (isset($_SESSION['name'])) {
    $userName = $_SESSION['name'];
    echo  ucfirst($userName);
} else {
    echo "User name not found in the session.";
}
?>
      
    </button>
    <div class="dropdown-content">
      <a href="#">Profile</a>
      <a href="#">My Account</a>
      <a href="Logout.php">Logout</a>
    </div>
  </div> 
</div>


</body>
</html>
