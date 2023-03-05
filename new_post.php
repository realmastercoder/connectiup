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
        <link rel="stylesheet" href="css/poststyle.css">
    </head>

    <body>
        <div class="box">
            <div class="formBox">
                <form action="post_page.php" method="POST">
                    <h1>Start Connecting...</h1>
                    <?php
                        print("Welcome, " . $_SESSION['username'] . "!");
                    ?>

                    <p>Write something and post to start connecting with other IUP students!</p>
                    <hr>
                    <input type="text" id="title" name="title" placeholder="Title" required>
                    <br>

                    <textarea id="post" name="content" rows="8" cols="50" placeholder="What do you want to say?" required></textarea>
                    <br>

                    <button type="submit">Submit post</button>
                    <hr>

                </form>
            </div>
        </div>
    </body>
</html>