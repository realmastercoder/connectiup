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
// escape the strings to prevent SQL injection
$content = mysqli_real_escape_string($conn, $content);
$title = mysqli_real_escape_string($conn, $title);

$post_pic_size = $_FILES['post_pic']['size'];
// if the file is less than 1B set a flag to true
if ($post_pic_size < 1) {
    // load the default profile pic, then store in in $post_pic
    $post_pic = NULL;
} else {
    $post_pic = $_FILES['post_pic']['tmp_name'];
    $post_pic = file_get_contents($post_pic);
    $post_pic = mysqli_real_escape_string($conn, $post_pic);
}

// create the SQL query
$sql = "INSERT INTO posts (user_id, title, content, created_at, post_image) VALUES ('$user_id', '$title', '$content', NOW(), '$post_pic')";
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