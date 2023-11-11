<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
      <a href="profile.php">Profile</a>
      <a href="#">My Account</a>
      <a href="Logout.php">Logout</a>
    </div>
  </div> 
</div>
<br>
<br>

<div class="w3-content" id="about">
   
   <h4 style="color:">
    Discover new things
</h4>

  <div class="search-container">
    <input type="text" class="search-bar" placeholder="Search...">
    <button class="search-button">Search</button>

  </div>
  <div class="container">
  <div class="card">
    <img src="https://placekitten.com/300/200" alt="Card Image">
    <h2>Card Title</h2>
    <p>This is a simple card example. You can customize it as needed.</p>
  </div>

  <div class="card">
    <img src="https://placekitten.com/300/200" alt="Card Image">
    <h2>Card Title</h2>
    <p>This is a simple card example. You can customize it as needed.</p>
  </div>

  <div class="card">
    <img src="https://placekitten.com/300/200" alt="Card Image">
    <h2>Card Title</h2>
    <p>This is a simple card example. You can customize it as needed.</p>
  </div>

  <div class="card">
    <img src="https://placekitten.com/300/200" alt="Card Image">
    <h2>Card Title</h2>
    <p>This is a simple card example. You can customize it as needed.</p>
  </div>

  <div class="card">
    <img src="https://placekitten.com/300/200" alt="Card Image">
    <h2>Card Title</h2>
    <p>This is a simple card example. You can customize it as needed.</p>
  </div>
  
  <div class="card">
    <img src="https://placekitten.com/300/200" alt="Card Image">
    <h2>Card Title</h2>
    <p>This is a simple card example. You can customize it as needed.</p>
  </div>
  

</div>
  </div>

  
<footer>
    
    <div class="column">
            <h3>Get to know us</h3>
            <ul>
                <li><a href="Sorry.html">Carrers</a></li>
                <li><a href="Sorry.html">About us</a></li>
                <li><a href="Sorry.html">What we do</a></li>
            </ul>
        </div>
        <div class="column">
            <h3>Let us help you</h3>
            <ul>
                <li><a href="">How to book a ticket</a></li>
                <li><a href="Sorry.html">Cancellation policy</a></li>
                <li><a href="Sorry.html">Pricing</a></li>
            </ul>
        </div>
    
        <div class="column">
            <h3>Connect with us</h3>
            <div class="social-icons">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
         <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        
            </div>
        </div>
       
    </footer>
</body>
</html>
