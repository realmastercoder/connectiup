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

<head>
  <title>ConnectIUP Account</title>
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/personal_account.css">
</head>

<body>
<div id="banner">
        <img src="images/LogoConnectIUP.png" style="width: 400px;">
    </div>
    <nav class ="menu">
        <ul>
            <li><a href='homepage.php'> Home</a></li>
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
  <div class="container">
    <h1>My ConnectIUP Account</h1>
      <div class="box">
        
        <form action="college.php" method="POST"> 
          <h2>User Information</h2>
        
          
              <div class="form-group-focused">
                <label><b>Username</b></label>
                <input type="text" placeholder="Username">
              </div>

              <div class="form-group-focused">
                <label><b>First name</b></label>
                <input type="text" placeholder="First name">
              </div>
                    
              <div class="form-group-focused">
                <label for="input-last-name"><b>Last name</b></label>
                <input type="text" placeholder="Last name">
              </div>
         
            
              <div class="form-group-focused">
                <label for="input-email"><b>Email address</b></label>
                <input type="email" placeholder="example@iup.edu">
              </div>

              <div class="form-group-focused">
                <label for="input-bday"><b>Birthday</b></label>
                <input type="text" placeholder="02-23-2001">
              </div>
            
                
            
                <!-- Address -->
            <h2>Contact Information</h2>
               
              <div class="form-group-focused">
                <label for="input-address"><b>Address</b></label>
                <input placeholder="Home Address" type="text">
              </div>
                 
              <div class="form-group-focused">
                <label for="input-city"><b>City</b></label>
                <input type="text" placeholder="City" >
              </div>
                
              <div class="form-group-focused">
                <label for="input-country"><b>Country</b></label>
                <input type="text" placeholder="Country">
              </div>

              <div class="form-group-focused">
                <label for="input-country"><b>Postal code</b></label>
                <input type="number" placeholder="Postal code">
              </div>

              <div class="form-group-focused">
                <label for="input-country"><b>Phone Number</b></label>
                <input type="number" placeholder="123-456-7890">
              </div>
                    
        
            <h2>Bio</h2>
            
            <div class="form-group-focused">
            <textarea rows="5" placeholder="A few words about you..."></textarea>
            </div>
            
            <h2>College</h2>

            <div class="form-group-focused">
            <input type="radio" name="college" value="NSM"><label id = "rad">Natural Sciences and Mathematics</label> 
            </div>

            <div class="form-group-focused">
            <input type="radio" name="college" value="EC"><label id = "rad">Education and Communications</label> 
            </div>

            <div class="form-group-focused">
            <input type="radio" name="college" value="AH"><label id = "rad">Arts and Humanities</label>
            </div>       

            <div class="form-group-focused">
            <input type="radio" name="college" value="BUS"><label id = "rad">Eberly College of Business</label>
            </div>

            <div class="form-group-focused">
            <input type="radio" name="college" value="HHS"><label id = "rad">Health and Human Services</label>
            </div>
            <button type="submit">Update</button> 

            </form> 
          </div>
  </div>
</body>