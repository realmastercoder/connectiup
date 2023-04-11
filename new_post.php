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
    <script src="scripts/collapse.js"></script>
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
                    <input type="checkbox" id="tag1" name="tag1" value="tag1">
                    <label for="tag1">Tag 1</label><br>
                    <input type="checkbox" id="tag2" name="tag2" value="tag2">
                    <label for="tag2">Tag 2</label><br>
                    <input type="checkbox" id="tag3" name="tag3" value="tag3">
                    <label for="tag3">Tag 3</label><br>
                    <input type="checkbox" id="tag4" name="tag4" value="tag4">
                    <label for="tag4">Tag 4</label><br>
                    <input type="checkbox" id="tag5" name="tag5" value="tag5">
                    <label for="tag5">Tag 5</label><br>
                    <input type="checkbox" id="tag6" name="tag6" value="tag6">
                    <label for="tag6">Tag 6</label><br>
                    <input type="checkbox" id="tag7" name="tag7" value="tag7">
                    <label for="tag7">Tag 7</label><br>
                    <input type="checkbox" id="tag8" name="tag8" value="tag8">
                    <label for="tag8">Tag 8</label><br>
                </div>

                <button type="submit">Submit post</button>
                <hr>

            </form>
        </div>
    </div>
</body>

</html>