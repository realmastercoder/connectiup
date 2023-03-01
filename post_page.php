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

// insert a new post into the database
// the structure of the post table is:
// id, user_id, title, content, created_at

// get the user id from the session
$user_id = $_SESSION['id'];

// get the title and content from the form
$title = $_POST['title'];
$content = $_POST['content'];

// create the SQL query
$sql = "INSERT INTO posts (user_id, title, content, created_at) VALUES ('$user_id', '$title', '$content', NOW())";
$result = mysqli_query($conn, $sql);

// print the result
if ($result) {
  echo "Post created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// find the post id
$sql = "SELECT id FROM posts WHERE user_id = '$user_id' AND title = '$title' AND content = '$content'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$post_id = $row['id'];

// redirect to the post page
header("Location: post.php?post_id=$post_id");
?>