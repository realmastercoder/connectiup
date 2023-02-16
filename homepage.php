<?php
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
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <h1 style="font-size:60px; font-family:'Times New Roman', Times, serif;"> <center>ConnectIUP</center></h1>
    <nav class ="menu">
        <ul>
            <li><a href='#'> Home</a></li>
            <li><a href='#'> Post Thread</a></li>
            <li><a href='#'> Add Friends</a></li>
            <li><a href='#'> Messaging</a></li>
            <li><a href='#'> About</a></li>
            <li><a href='#'> Contact</a></li>
        </ul>
        <form class = "search-form">
            <input type ="text" placeholder ="Explore Threads">
            <button>Search</button>
        </form>
    </nav>
    <?php
            $sql = "SELECT * from posts";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    print('<div id="post">');
                    $title = $row["title"];
                    print("title: " .'<a href="#">' . $row["title"] . '</a>' . "<br>");
                    $new_sql = "SELECT * from users where id = " . $row["user_id"];
                    $new_result = mysqli_query($conn, $new_sql);
                    $new_row = mysqli_fetch_assoc($new_result);
                    $username = $new_row["username"];
                    print("created by: " . $username);
                    print("</div>");
                }
            }
    ?>
    <div id="post">
        
    </div>
    
</body>

</html>