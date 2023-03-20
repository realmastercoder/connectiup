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
</head>

<body>
    <div id="banner">
        <img src="images/LogoConnectIUP.png" style="width: 400px;">
    </div>
    <nav class ="menu">
        <ul>
            <li><a href='#'> Home</a></li>
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
    <h2>Welcome, <?php echo $_SESSION['username'];?>!</h2>
    <hr>
    <?php
            $sql = "SELECT * from posts ORDER BY id DESC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                print('<ul class="no-bullets">');
                while($row = mysqli_fetch_assoc($result)){
                    print('<div class="post">');
                    $title = $row["title"];
                    $new_sql = "SELECT * from users where id = " . $row["user_id"];
                    $new_result = mysqli_query($conn, $new_sql);
                    $new_row = mysqli_fetch_assoc($new_result);
                    $username = $new_row["username"];
                    #print("title: " .'<a href="#">' . $row["title"] . '</a>' . "<br>");
                    print('<li class="row">');
                    print('<a href="post.php?post_id=' . $row["id"] . '">' . '<h4 class="title">' .  $title . '</h4></a>');
                    print('<div class="bottom"><p class="timestamp">' . $row["created_at"] . '</p>');
                    print('<a href="#"><p class="author">' . $username . '</p></a></div></li>');
                    #print("created by: " . $username);
                    print("</div>");
                }
                print('</ol>');
            }
    ?>
    <div id="post">
        
    </div>
    
</body>

</html>