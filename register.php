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

$user_password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$username = $_POST['username'];
$email = $_POST['email'];

# Check if the passwords match, if not, alert then redirect to register.php
if ($user_password != $confirm_password) {
    print('<script>alert("Passwords do not match. Please try again. Redirecting...");</script>');
    header('Location: register.html');
}

# check if $email ends in iup.edu, if not, alert then redirect to register.php
$mail_check = substr($email, -7);
if ($mail_check != "iup.edu") {
    print('<script>alert("Email must be an IUP email. Please try again. Redirecting...");</script>');
    header('Location: register.html');
}

# check the db for matching username, if found, alert then redirect to register.php
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count == 1) {
    print('<script>alert("Username already exists. Please try again. Redirecting...");</script>');
    header('Location: register.html');
}

# check the db for matching email, if found, alert then redirect to register.php
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count == 1) {
    print('<script>alert("Email already exists. Please try again. Redirecting...");</script>');
    header('Location: register.html');
}

# if all checks pass, insert the user into the db. also pass a created_at timestamp
$query = "INSERT INTO users (username, password, email, created_at) VALUES ('$username', '$user_password', '$email', NOW())";

# print the reply from the db
if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

header('Location: login.html')

?>