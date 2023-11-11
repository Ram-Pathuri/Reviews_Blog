<?php
include 'connection.php';
session_start();
$email=$_SESSION["email"];
$sql = "SELECT * FROM  reg_info where email='$email'" ;
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$_SESSION['name']= $row["username"];
}
  echo $row["username"];
}

?>
