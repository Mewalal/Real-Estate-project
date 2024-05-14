<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMS</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<!-- <link rel="stylesheet" type="text/css" href="admin.css"> -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!-- font    -->
<link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
<!-- rlway font -->
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
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
                <li><a href="admin.php">Admin</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="logout.php">Logout</a></li>
                
            </ul>
        </div>



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
<!-- admin panell -->
    
    <section id="sidebar">
       <div class="sidebar"></div>
            <h3>ADMIN PANEL</h3>
            
        
        
          <div class="sidebar-menu"> 
          <ul class="uloo">
                 <li class="lioo"><a  id="ao" href="dashboard.php"><div class="fa fa-desktop"><div class="admdas">Dashboard</div></div></a></li>
                 <li class="lioo"><a  id="ao" href="addproperty.php"><div class="fa fa-users"><div class="admdas">Add property</div></div></a></li>
                 <li class="lioo"><a  id="ao" href="addimage.php"><div class="fa fa-file"><div class="admdas">Add property image</div></div></a></li>
                 <li class="lioo"><a  id="ao" href="prorptyview.php"><div class="fa fa-file-o"><div class="admdas">Property view</div></div></a></li><br>
                 <li class="lioo"><a  id="ao" href="adminlogin.php"><div class="fa fa-sign-out"><div class="admdas">Logout</div></div></a></li>

             </ul>

         </div>
         </section>


  
    </body>
</html>