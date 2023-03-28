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
    <link rel="stylesheet" href="css/sidebar.css">
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

    <div class="sidebar">
            <hr/>
            <h3>Rules for Posting</h3>
            <p>When writing posts and replies, users must keep in mind
                the following rules&ast;:</p>
            <br/>
            <ol>
                <li>Users shall be respectful and courteous in their posts 
                    and replies to other users.</li><br/>

                <li>Users shall not share any explicit content in the 
                    form of pictures or words. Content falling under this 
                    category includes pornographic or sexual material, explicit 
                    language, etc. </li><br/>

                <li>Users shall refrain from posting content with harmful intent. 
                    This includes no demeaning, discriminatory, or harassing 
                    behavior in posts and replies. </li><br/>

                <li>Users shall not spam post or reply. </li><br/>

                <li>Users shall not post copyright infringing material. </li><br/>

                <li>Users shall not engage in any illegal activity 
                    in their posts and replies. </li>    
            </ol>
            <br/>
            <p>&ast;Refusal to comply with the rules listed above will result 
                in consequences for the user. These consequences are outlined 
                in ConnectIUP&apos;s Terms and Conditions that all users agree to in 
                order to use ConnectIUP. To review our site&apos;s Terms and Conditions, 
                click <a href="terms_cond.html"><span class=links>here</span></a>. 
            </p>
            <hr/>
            
            <h3>Helpful Links</h3>
            <ul>
            <div class="links">
                <li><a href="about.php">About ConnectIUP</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="terms_cond.html">Terms and Conditions</a></li>
                <li><a href="#">FAQ</a></li> <!--FAQ page does not exist currently-->
                <li><a href="#">Rules for Posting</a></li> <!--Post rules page does not exist currently-->
            </div>
            </ul>
            <hr/>
    </div> 

    <div class="maincontent">
    <h2>Welcome, <?php echo "<a href='public_profile.php?username=" . $_SESSION['username'] . "'>" . $_SESSION['username'] . '</a>';?>!</h2>
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
                    print('<a href="public_profile.php?username=' . $username . '"><p class="author">' . $username . '</p></a></div></li>');
                    #print("created by: " . $username);
                    print("</div>");
                }
                print('</ol>');
            }
    ?>
    <div id="post">
        
    </div>
        </div>
    
</body>

</html>