<?php
    echo "test";
    

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
    if (isset($_POST['username']) and isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);
        if ($count == 1){
            $_SESSION['username'] = $username;
            echo "Login Credentials verified";
            session_start();
            // start a session and redirect to homepage
            $_SESSION['username'] = $username;
            // query the db for the user's id
            $query = "SELECT id FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $_SESSION['id'] = $id;
            header('Location: homepage.php');
        }else{
            $fmsg = "Invalid Login Credentials.";
            // send error code and redirect to login page
            header('Location: login.html?err=1');
        }

    }
    

    
?>