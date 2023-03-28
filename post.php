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
$post_user_id = $row['user_id'];
$sql = "SELECT * FROM users WHERE id = '$post_user_id'";
$poster = mysqli_query($conn, $sql);
$poster = mysqli_fetch_assoc($poster)['username'];

?>
<!DOCTYPE html>

<html>

<head>
  <title>ConnectIUP</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/post_page.css">
</head>

<body>
  <div id="banner">
    <img src="images/LogoConnectIUP.png" style="width: 400px;">
  </div>
  <nav class="menu">
    <ul>
      <li><a href='homepage.php'> Home</a></li>
      <li><a href='new_post.php'> Post Thread</a></li>
      <li><a href='#'> Add Friends</a></li>
      <li><a href='#'> Messaging</a></li>
      <li><a href='about.php'> About</a></li>
      <li><a href='contact.html'> Contact</a></li>
    </ul>
    <form class="search-form">
      <input type="text" placeholder="Explore Threads">
      <button>Search</button>
    </form>
  </nav>
  <h2>Welcome,
    <?php echo $_SESSION['username']; ?>!
  </h2>
  <hr>
  <div class="post">
    <h1>
      <?php echo $title; ?>
    </h1>
    <p>
      <?php echo $content; ?>
    </p>
    <hr>
    <p>Posted by
      <?php echo "<a href=public_profile.php?username=" . $poster . ">" . $poster . "</a>"; ?> on
      <?php echo $created_at; ?>
    </p>
  </div>
  <h2> Reply to this post <h2>
      <form action="reply.php" method="post">
        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
        <textarea name="content" rows="5" cols="100"></textarea>
        <input type="submit" value="Reply">
      </form>


      <h2>Replies</h2>
      <?php
      $sql = "SELECT * FROM replies WHERE post_id = '$post_id'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          print("<div class='reply'>");
          $reply_content = $row['content'];
          $reply_created_at = $row['created_at'];
          $reply_user_id = $row['user_id'];
          $sql = "SELECT * FROM users WHERE id = '$reply_user_id'";
          $reply_user = mysqli_query($conn, $sql);
          $reply_user = mysqli_fetch_assoc($reply_user)['username'];
          print("<p>$reply_content</p>");
          print("<hr>");
          print("<p>Posted by <a href=$reply_user>$reply_user</a> on $reply_created_at</p>");
          print("</div>");
        }
      }
      ?>
</body>