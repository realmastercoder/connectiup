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
    <title>ConnectIUP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/button.css">
</head>

<body>
    <div id="banner">
        <img src="images/LogoConnectIUP.png" style="width: 400px;">
    </div>
    <nav class ="menu">
        <ul>
            <li><a href='homepage.php'> Home</a></li>
            <li><a href='new_post.php'> Post Thread</a></li>
            <li><a href='addfriends.php'> Add Friends</a></li>
            <li><a href='#'> Messaging</a></li>
            <li><a href='about.php'> About</a></li>
            <li><a href='contact.html'> Contact</a></li>
            <li><input type=button class="logout" onclick="window.location.href='logout.php'" value="Logout"></li>
        </ul>
        <form class = "search-form">
            <input type ="text" placeholder ="Explore Threads">
            <button>Search</button>
        </form>
    </nav>
</body>

</html>