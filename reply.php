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

// find logged in user
$user_id = $_SESSION['id'];
$username = $_SESSION['username'];

// find the post id from post request
$post_id = $_POST['post_id'];

// add an entry to the replies table
$sql = "INSERT INTO replies (user_id, post_id, content, created_at) VALUES ('$user_id', '$post_id', '$_POST[content]', NOW())";
$result = mysqli_query($conn, $sql);

// redirect to the post page
header("Location: post.php?post_id=$post_id");
?>