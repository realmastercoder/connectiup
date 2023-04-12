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


// get username from get request
$username = $_GET['username'];
// get user info from username
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$user_id = $row['id'];
$profile_pic = $row['profile_pic'];
$profile_pic = base64_encode($profile_pic);
$src = "data:image/png;base64," . $profile_pic;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile Page for <?php echo $username ?> </title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/pub_profile.css">
        <link rel="stylesheet" href="css/home.css">
    </head>

    <body>
    <div id="banner">
      <img src="images/LogoConnectIUP.png" style="width: 400px;">
    </div>
    <nav class ="menu">
      <ul>
        <li><a href='homepage.php'> Home</a></li>
        <li><a href='new_post.php'> Post Thread</a></li>
        <li><a href='#'> Add Friends</a></li>
        <li><a href='#'> Messaging</a></li>
        <li><a href='about.php'> About</a></li>
        <li><a href='contact.html'> Contact</a></li>
      </ul>
      <form class = "search-form">
        <input type ="text" placeholder ="Explore Threads">
        <button>Search</button>
      </form>
    </nav>
    <h2>Logged in as <?php echo "<a href='public_profile.php?username=" . $_SESSION['username'] . "'>" . $_SESSION['username'] . '</a>';?>!</h2>
    <hr>

    <h1>Profile Page for <div style="color:goldenrod"><?php echo $username; ?></div></h1>
    <div class="profile">
        <img src="<?php echo $src; ?>" alt="Profile Picture" style="width:200px;height:200px;">
        <h2><?php echo $username; ?></h2>
        <h3>Posts</h3>
        <?php

        // get posts from user
        $sql = "SELECT * FROM posts WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['title'];
            $content = $row['content'];
            $created_at = $row['created_at'];
            $post_id = $row['id'];
            echo "<div class='post'>";
            echo "<h3><a href='post.php?post_id=" . $post_id . "'>" . $title . "</a></h3>";
            echo "<p>" . $content . "</p>";
            echo "<p>" . $created_at . "</p>";
            echo "</div>";
        }

        ?>
        <h3>Friends</h3>
        <h3>Groups</h3>
    </div>
    <?php
    // if the user logged in is the owner of the profile, show edit profile button
    if ($_SESSION['username'] == $username) {
        echo "<a href='personal_account.php'><h2>Edit Profile</h2></a>";
    }
    ?>

    </body>

</html>