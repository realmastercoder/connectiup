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

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile Page for </title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/pub-profile.css">
    </head>

    <body>
        <?php
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
        <h1>Profile Page for <?php echo $username; ?></h1>
        <img src=<?php echo $src; ?> alt="Profile Picture">

    </body>

</html>