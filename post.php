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

// find the post id
$post_id = $_GET['post_id'];


// find the post
$sql = "SELECT * FROM posts WHERE id = '$post_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$content = $row['content'];
$created_at = $row['created_at'];
$poster = $row['user_id'];

// display the post, including the title, content, poster, and created_at
// use generic html, this will be modified later
print('<a href="homepage.php">Back to Home</a>');
print("<h1>$title</h1>");
print("<p>$content</p>");
print("<hr>");
print("<p>Posted by $poster on $created_at</p>");
?>