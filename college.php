<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "connectIUP";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$college = $_POST['college'];
$user_id = $_SESSION['id'];

$ah = 0;
$bus = 0;
$ec = 0;
$hhs = 0;
$nsm = 0;
$gen = 0;

if ($college == 'AH') {
  $ah = 1;
}
if ($college == 'BUS') {
  $bus = 1;
}
if ($college == 'EC') {
  $ec = 1;
}
if ($college == 'HHS') {
  $hhs = 1;
}
if ($college == 'NSM') {
  $nsm = 1;
}

// update the user's college
$sql = "UPDATE users SET AH = $ah, BUS = $bus, EC = $ec, HHS = $hhs, NSM = $nsm WHERE id = $user_id";
$result = mysqli_query($conn, $sql);

// redirect to their userpage
header("Location: public_profile.php?username=" . $_SESSION['username']);

?>