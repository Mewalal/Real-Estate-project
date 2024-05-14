<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMS</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<!-- <link rel="stylesheet" type="text/css" href="admin.css"> -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!-- font    -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,wght@0,300;1,100&display=swap" rel="stylesheet"> -->
<!-- rlway font -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet"> -->


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
    


    <section id="main-content">
        <div class="card">
            <div class="box">
                 <h4>Add property</h4>
                <form action="" method="post" class="forrm-group" enctype="multipart/form-data">
                        <input type="text" class="input-fild" name="Property_title" placeholder="Property title" required>
                        <input type="text" class="input-fild" name="Land_area" placeholder="Land Area">
                       <input type="text" class="input-fild" name="price" placeholder="Property price" >
                       <input type="text" class="input-fild" name="Address" placeholder="Address" >
                        <input type="text" class="input-fild" name="Description" placeholder="Description">
                        <input  type="text" class="input-fild" name="sellrent" placeholder="sell/rent"><br>
                         <div class="imgg">
                        <label>Add property image<label>
                        <input required name="files"  type="file" multiple />                     
                         </div><br>
                        <h4>Condition</h4>
                    
                        <input type="number" class="input-fild" name="Kechen" placeholder="Kechen" >
                        <input type="number" class="input-fild" name="Hall" placeholder="Hall" >
                        <input type="number" class="input-fild"  name="Bedroom"  placeholder="Bedroom">
                        <input type="number" class="input-fild" name="Bathroom" placeholder="Bathroom" >
                        <input type="number" class="input-fild" name="Balcony"placeholder="Balcony">
                        <input type="submit" class="sub" name="ADD" value="ADD">
  
            </form>
           </div>
              
        </div>
    </section>
    <!-- //////////////side baarr code///////////////////// -->
    <section id="sidebar">
       <div class="sidebar"></div>
            <h3>ADMIN PANEL</h3>
            
        
        
          <div class="sidebar-menu"> 
          <ul class="uloo">
              <li class="lioo"><a  id="ao" href="dashboard.php"><div class="fa fa-desktop"><div class="admdas">Dashboard</div></div></a></li>
              <li class="lioo"><a  id="ao" href="addproperty.php"><div class="fa fa-users"><div class="admdas">Add property</div></div></a></li>
              <li class="lioo"><a  id="ao" href="addimage.php"><div class="fa fa-file"><div class="admdas">Add property image</div></div></a></li>
              <li class="lioo"><a  id="ao" href="prorptyview.php"><div class="fa fa-file-o"><div class="admdas">Property view</div></div></a></li> <br>
              <li class="lioo"><a  id="ao" href="adminlogout.php"><div class="fa fa-sign-out"><div class="admdas">Logout</div></div></a></li>
             </ul>
         </div>
         </section>
    
 
    </body>
</html>
            <?php

            include 'connection.php';  

            if(isset($_POST['ADD'])){

                $title = $_POST['Property_title'];
                $Land_area = $_POST['Land_area'];
                $price = $_POST['price'];
                $Address = $_POST['Address'];
                $Description = $_POST['Description'];
                $sellrent = $_POST['sellrent'];
                // $files = $_FILES['files'];////YASKO CODE TAAL XA
                $Kechen = $_POST['Kechen'];
                $Hall = $_POST['Hall'];
                $Bedroom = $_POST['Bedroom'];
                $Bathroom = $_POST['Bathroom'];
                $Balcony = $_POST['Balcony'];
            ////////////////IMAGE KO LAGI CODE///////////
                $files = $_FILES['files'];
                // print_r($title); 
                echo "<br>";
                // print_r($files);
                $filename = $files['name'];
                // print_r($filename);
                $fileerror = $files['error'];
                $filetmp = $files['tmp_name']; 
                
                $fileext = explode('.',$filename);
                $filecheck = strtolower(end($fileext)); 

                $fileextstored = array('png','jpg','jpeg');

                if(in_array($filecheck,$fileextstored)){

                    $destinationfile = 'upload/'.$filename;
                    move_uploaded_file($filetmp,$destinationfile);
                
                $insertquery = "insert into propertylist(property_title,land_area, pro_price, 
                address, description, soldrent,image, kechen, hall, bedroom, bathroom, balcony) 
                values ('$title','$Land_area','$price','$Address','$Description','$sellrent','$destinationfile','$Kechen','$Hall','$Bedroom','$Bathroom','$Balcony')";
                
            $res = mysqli_query($conn,$insertquery);
                if($res){  
                    ?>
                    <script>
                        alert("DATA INSERTED SUCCESSFULLY");
                    </script>  
                    <?php
                    
                }
                else{
                ?>
                <script>
                    alert("DATA NOT INSERTED");
                </script>
                <?php
                }
                }
            }
                ?>