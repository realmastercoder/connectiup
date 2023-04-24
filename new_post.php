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
    <link rel="stylesheet" href="css/poststyle.css">
    <!--<script src="scripts/collapse.js"></script> This was causing display issues-->
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
        <div class="formBox">
            <form action="post_page.php" method="POST" enctype="multipart/form-data">
                <h1>Start Connecting...</h1>
                <?php
                print("Welcome, " . $_SESSION['username'] . "!");
                ?>

                <p>Write something and post to start connecting with other IUP students!</p>
                <hr>
                <input type="text" id="title" name="title" placeholder="Title" required>
                <br>

                <textarea id="post" name="content" rows="8" cols="50" placeholder="What do you want to say?"
                    required></textarea>
                <br>
                <p>Do you want to add an image to this post?</p>
                <input type="file" name="post_pic" accept="image/*">
                <!-- checkboxes to add tags to post -->
                <div>
                    <p id='tags'>Add Tags:</p>
                    <input class='check1' type="checkbox" name="tags[]" value="AH">
                    <label class='label1' for="AH">Arts & Humanities</label><br>
                    <input class='check1' type="checkbox" name="tags[]" value="BUS">
                    <label class='label1' for="BUS">Business</label><br>
                    <input class='check1' type="checkbox" name="tags[]" value="EC">
                    <label class='label1' for="EC">Education and Communications</label><br>
                    <input class='check1' type="checkbox" name="tags[]" value="HHS">
                    <label class='label1' for="HHS">Health and Human Services</label><br>
                    <input class='check1' type="checkbox" name="tags[]" value="NSM">
                    <label class='label1' for="NSM">Natural Sciences and Mathematics</label><br>
                </div>

                <button type="submit">Submit post</button>
                <hr>

            </form>
        </div>
    </div>
</body>

</html>