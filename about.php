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


<html>
  <head>
    <title>About ConnectIUP</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <h1>About ConnectIUP</h1> 
    <br />
    <center><img src="images/LogoConnectIUP.png" style="width: 500px;"></img></center>
    <br />

    
    <h2>What is ConnectIUP?</h2>
    <p>
      ConnectIUP is a social networking site specifically for IUP students! 
      Students can connect with one another and meet new people. 
      You can find others who have similar interests, others who are 
      in the same major, and other students taking the same classes. 
      IUP students can chat in forums, join study groups and more. Start connecting!
    </p>
    <br />


    <h2>Who can join?</h2>
    <p>
      All students of IUP can register an account with ConnectIUP
      and utilize its services. Click <a href="register.html">here</a> to 
      create your account now!
    </p>
    <br />

    <h2>Why connect?</h2>
    <p>
      Getting involved enhances the college experience and ConnectIUP
      does exactly that for its users. Start enhancing your college experience
      by trying out ConnectIUP's different features. 
    </p>
    
    <br />

    <h2>What can you do on ConnectIUP?</h2>
    <p>
      <ul>
        <li>Write and share posts</li>
        <li>Reply to other student's threads</li>
        <li>Find and join groups of interest</li>
        <li>Direct message other individuals and groups</li>
        <li>Personalize your ConnectIUP profile</li>
      </ul>
    </p>
    <br />

  </body>
    
</html>
