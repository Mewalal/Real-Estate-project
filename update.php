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
               
                   <?php 
                        include 'connection.php';  
                        $ids=$_GET['id'];
                        $showquery = "select * from propertylist where id ={$ids}";
                        $showdata = mysqli_query($conn,$showquery);
                    
                         $arrdata = mysqli_fetch_array($showdata);

                        if(isset($_POST['update'])){
                            $idsupdate=$_GET['id'];

                            $title = $_POST['Property_title'];
                            // $Pro_type = $_POST['Pro_type'];
                            // $Pro_lot_size = $_POST['Pro_lot_size'];
                            $Land_area = $_POST['Land_area'];
                            $price = $_POST['price'];
                            // $Sq_fit_Price = $_POST['Sq_fit_Price'];
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
                            
                            // $insertquery = "insert into propertylist(property_title, pro_type,land_area, pro_price, 
                            // address, description, soldrent,image, kechen, hall, bedroom, bathroom, balcony) 
                            // values ('$title','$Pro_type','$land_area','$price','$Address','$Description','$sellrent','$destinationfile',
                            // '$Kechen','$Hall','$Bedroom','$Bathroom','$Balcony')";
                             
                        $query ="update propertylist set Id=$ids, land_area='$Land_area',pro_price='$price',
                        address='$Address',description='$Description',soldrent='$sellrent',image='$destinationfile',kechen='$Kechen', hall='$Hall',
                        bedroom='$Bedroom',bathroom='$Bathroom', balcony='$Balcony' where id=$idsupdate"; 

                        $res = mysqli_query($conn,$query);
                            if($res){  
                                ?>
                                <script>
                                    alert("DATA UPDATED SUCCESSFULLY");
                                </script>  
                                <?php
                                
                            }
                            else{
                            ?>
                            <script>
                                alert("DATA NOT UPDATED");
                            </script>
                            <?php
                            }
                            }  
                        }
                  ?>
                   
                       <!--  <label>Property title<label> -->
                        <input type="text" class="input-fild" value="<?php echo $arrdata['property_title'];?>" name="Property_title" placeholder="Property title" required>
                    
                        <!-- <label>Property type<label> -->
                        <!-- <input type="text" class="input-fild"  value="<?php echo $arrdata['pro_type'];?>" name="Pro_type" placeholder="Property type" required> -->
                    
                        <!-- <label>Property lot size<label> -->
                        <!-- <input type="text" class="input-fild" name="Pro_lot_size" placeholder="Property lot size"> -->
                    
                        <!-- <label>Land area<label> -->
                        <input type="text" class="input-fild" value="<?php echo $arrdata['land_area'];?>" name="Land_area" placeholder="Land Area">
                
                        
                    
                        <!-- <label>price<label> -->
                       <input type="number" class="input-fild" value="<?php echo $arrdata['pro_price'];?>" name="price" placeholder="Property price" >
                    
                        <!-- <label>Sq fit Price<label> -->
                        <!-- <input type="number" class="input-fild" name="Sq_fit_Price" placeholder="Sq fit price" > -->
                    
                        <!-- <label>Address<label> -->
                        <input type="text" class="input-fild" value="<?php echo $arrdata['address'];?>" name="Address" placeholder="Address" >
                    
                        <!-- <label>Description<label> -->
                        <input type="text" class="input-fild" value="<?php echo $arrdata['description'];?>" name="Description" placeholder="Description" >
                        
                        
                         <div class="imgg">
                         <input  type="text" class="sell_rent" value="<?php echo $arrdata['soldrent'];?>" name="sellrent" placeholder="sell/rent"><br>
                             <label>Add property image<label>
                        <input name="files" value="<?php echo $arrdata['image'];?>" type="file" multiple>
                    
                        <!-- <label>Sold</label> -->
                        
                        
                        </div>
                       
                    
                        <h4>Condition</h4>
                    
                        <!-- <label>Kechen<label> -->
                        <input type="number" class="input-fild" value="<?php echo $arrdata['kechen'];?>" name="Kechen" placeholder="Kechen" >
                 
                        <!-- <label>Hall<label> -->
                        <input type="number" class="input-fild" value="<?php echo $arrdata['hall'];?>" name="Hall" placeholder="Hall" >
                    <!--  -->
                        <!-- <label>Bedroom<label> -->
                        <input type="number" class="input-fild" value="<?php echo $arrdata['bedroom'];?>"  name="Bedroom"  placeholder="Bedroom">
                   
                        <!-- <label>Bathroom<label> -->
                        <input type="number" class="input-fild" value="<?php echo $arrdata['bathroom'];?>" name="Bathroom" placeholder="Bathroom" >
                    
                        <!-- <label>Balcony<label> -->
                        <input type="number" class="input-fild" value="<?php echo $arrdata['balcony'];?>" name="Balcony"placeholder="Balcony">
                  
                        <input type="submit" class="sub" name="update" value="Update">
  
            </form>
           </div>
              
        </div>
    </section>
    <!-- //////////////side baarr code///////////////////// -->
    <section id="sidebar">
         <div class="sidebar-brand">
            <h3>ADMIN PANEL</h3>
        </div> 
         <div class="sidebar-menu"> 
         <ul class="uloo">
                 <li class="lioo"><a  id="ao" href="dashboard.php"><div class="fa fa-desktop"><div class="admdas">Dashboard</div></div></a></li>
                 <li class="lioo"><a  id="ao" href="addproperty.php"><div class="fa fa-users"><div class="admdas">Add property</div></div></a></li>
                 <li class="lioo"><a  id="ao" href="addimage.php"><div class="fa fa-file"><div class="admdas">Add property image</div></div></a></li>
                 <li class="lioo"><a  id="ao" href="prorptyview.php"><div class="fa fa-file-o"><div class="admdas">Property view</div></div></a></li><br>
                 <li class="lioo"><a  id="ao" href="adminlogout.php"><div class="fa fa-sign-out"><div class="admdas">Logout</div></div></a></li>

             </ul>

         </div>
         </section>
    
 
    </body>
</html>