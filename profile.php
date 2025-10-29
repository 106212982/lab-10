<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile Page</title>
</head>
<body>
  <h2>Username: <?php echo htmlspecialchars($username); ?>!</h2>
  <h2>Email: <?php echo htmlspecialchars($email); ?>!</h2>

  <a href="update_profile.html">Update profile</a>
</body>
</html>