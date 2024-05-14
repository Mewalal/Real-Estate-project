<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Adminlogin</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"> -->
 </head>
 <body>
 <div class="nav-bar">
        <img src="logo.jpeg">
        <div class="manu_right">
            <span onclick="myfunction()">&#9776;</span>

            <ul id="menu"> 
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="properties.php">Properties</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li><a href="admin.php">Admin</a></li> -->
                <li><a href="register.php">Register</a></li>
                <li><a href="logout.php">Logout</a></li>
                
            </ul>
        </div>



    </div>


  <div class="bgimg">
   <div class="centerdiv">
    <img src="userlogo.jpg" id="profilepic">
    <h2>Admin login</h2>
    <form action="admin.php" method="post">
     <div>
      <input type="text" name="" class="inputbox" placeholder="Username">
     </div>
     <br>
     <div>
      <input type="Password" name="" class="inputbox" placeholder="Password">
     </div>
     <br>
     <div>
      <button type="submit" class="inputbox"> LOGIN </button>
     </div>
    </form> <br>
    <div class="FORGOT-SECTION">
     <div class="fog">Forget Password?</div>
    </div>
   </div>
  </div>
  
 </body>
</html>