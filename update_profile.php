<?php
session_start();
require_once("settings.php");

$conn = mysqli_connect($host, $username, $password, $database);


$current_username = $_SESSION['username'];  

$new_email    = trim($_POST['email'] ?? '');

    $query = "
    UPDATE user 
    SET email = '$new_email' 
    WHERE username = '$current_username'
    ";
  $result = mysqli_query($conn, $query);

if (isset($result) && $result) {
  $_SESSION['email'] = $new_email;

  echo " Profile updated successfully.<br>";
  echo "<a href='profile.php'>Back to Profile</a>";
} 
else {
  echo " Failed to update profile. Please try again.";
}
?>