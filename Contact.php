<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMS</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" type="text/css" href="aboutcontact.css">
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
                <li><a href="login.php">Logout</a></li>
                
            </ul>
        </div>
    </div>
    <!-- //////////////////////////////////////////////////// -->
    <div class="contact-section">
    <h1>Contact Us</h1>
    <p>we are one of the best properties dealer agents</p>
</div>
<h2 style="text-align:center">Other information</h2>
  <div class="row">
    <div class="column-con">
      <img src="onemap.jpg" style="width:80%" style="height:50%">
    </div>
    <div class="column-con">
      <form action="">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:50px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<!-- ////////////////////////////////footer////////// -->
<div class="three-column-footer-contact-form-container">
  <footer class="three-column-footer-contact-form" data-equalizer data-equalize-by-row="true">
    <div class="footer-left" data-equalizer-watch>
      <div class="baseline">
        <div class="contact-details">
          <h6>Contact details</h6>
          <p><i class="fa fa-phone fa-lg" aria-hidden="true"></i> 01234 567890</p>
          <p><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact us</a></p>
          <p><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> Street, City, County, Country</p>
        </div>
        <div class="newsletter">
          <div class="input-group">
            <h6>Sign up for our newsletter</h6>
            <input class="input-group-field" type="email" placeholder="Email address">
          </div>
          <a class="button expanded" href="#">Submit</a>
        </div>
      </div>
     </div>
    <div class="footer-center" data-equalizer-watch>
      <div class="baseline">
        <div class="newsletter">
          <h6>Contact form</h6>
          <div class="input-group">
            <input class="input-group-field" type="text" placeholder="Name">
            <input class="input-group-field" type="email" placeholder="Email address">
            <textarea placeholder="Message"></textarea>
          </div>
          <a class="button expanded" href="#">Submit</a>
        </div>
      </div>
    </div>
    <div class="footer-right" data-equalizer-watch>
      <div class="baseline">
        <img class="thumbnail" src="https://placehold.it/100">
        <h6>Opening times</h6>
        <p>Mon - Fri 9:00am - 5:00pm</p>
        <p>Sat 9:00am - 8:00pm</p>
        <p>Sun 9:00am - 4:00pm</p>
        <div class="social">
          <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
          <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
          <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
          <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </footer>
</div>







    <script>
         function myfunction(){
             var x=document.getElementById("menu");
             if(x.style.display == "block")
             {
                x.style.display ="none";
             }
             else{
                 x.style.display="block";
             }
         }
    </script>
    
    </body>
</html>
