<?php
session_start(); // Start the session
include 'dbconnect.php'; // Include the database connection file

$username = $_POST['username'];
$password = $_POST['password'];

// Protect against SQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT * FROM admin WHERE username='$username' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  // If the query returns a row, the login is successful
  $_SESSION['login_user'] = $username; // Store the username in session variable
  header("location: welcome.php"); // Redirect to the welcome page
} else {
  echo "Incorrect username or password";
}
?>
