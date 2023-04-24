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
    <title>ConnectIUP - Post Feature</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/button.css">
</head>

<body>
    <div id="banner">
        <img src="images/LogoConnectIUP.png" style="width: 400px;">
    </div>
    <nav class="menu">
        <ul>
            <li><a href='homepage.php'> Home</a></li>
            <li><a href='new_post.php'> Post Thread</a></li>
            <li><a href='addfriends.php'> Add Friends</a></li>
            <li><a href='#'> Messaging</a></li>
            <li><a href='about.php'> About</a></li>
            <li><a href='contact.html'> Contact</a></li>
            <li><input type=button class="logout" onclick="window.location.href='logout.php'" value="Logout"></li>
        </ul>
        <form class="search-form">
            <input type="text" placeholder="Explore Threads">
            <button>Search</button>
        </form>
    </nav>
    <div class="box">
        <div class="contentBox">
        <h1>About ConnectIUP</h1>
        <hr>

        <h3>What is ConnectIUP?</h3>
        <p>
          ConnectIUP is a social networking site specifically for IUP students! 
          Students can connect with one another and meet new people. 
          You can find others who have similar interests, others who are 
          in the same major, and other students taking the same classes. 
          IUP students can chat in forums, join study groups and more. Start connecting!
        </p>
        <br />


        <h3>Who can join?</h3>
        <p>
          All students of IUP can register an account with ConnectIUP
          and utilize its services. 
        </p>
        <br />

        <h3>Why connect?</h3>
        <p>
          Getting involved enhances the college experience and ConnectIUP
          does exactly that for its users. Start enhancing your college experience
          by trying out ConnectIUP's different features. 
        </p>
        
        <br />

        <h3>What can you do on ConnectIUP?</h3>
        <p>
          <ul>
            <li>Write and share posts</li>
            <li>Reply to other student's threads</li>
            <li>Find and join groups of interest</li>
            <li>Direct message other individuals and groups</li>
            <li>Personalize your ConnectIUP profile</li>
          </ul>
        </p>
        </div>
    </div>
</body>

</html>