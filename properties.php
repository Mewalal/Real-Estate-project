
<?php
session_start();

if(!isset($_SESSION['username'])){
    // echo "you are logged out";
    // header('location:home.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMS</title>
    
    <link rel="stylesheet" type="text/css" href="style2.css" > 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    
</head>
<body>
   
<div class="body-cont">
    <div class="nav-bar">
        <img src="logo.jpeg">
        <div class="manu_right">
            <span onclick="myfunction()">&#9776;</span>

            <ul id="menu"> 
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="properties.php">Properties</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Logout</a></li>
                
            </ul>
        </div>
        </div>
    </div>
    
    <!-- ///////////////////////////// -->
        <div>
        <!-- <h2> Helo this is 
            <?php echo $_SESSION['username']; ?>
         </h2> -->

        </div>
        <!-- ////////////////SEARCH BOX//////////////////////////////////// 
        <div id="searchbox" >
            
            <form  action="" method ="POST" class="fvrt">
                <h2>Find property</h2>
        
            <div class="search-contt">


                    <div class="form-city">
                        <label for="Select city">Property City:</label>
                        <select>
                            <optgroup  label="Select city">
                                <option value="Kathmandu">Kathmandu</option>
                                <option value="Chitwan">Chitwan</option>
                                <option value="Butwal">Butwal</option>
                                <option value="Bhairahawa">Bhairahawa</option>
                                <option value="Hetauda">Hetauda</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-type">
                        <label for="Select propeties type">Propert Type:</label>
                        <select>
                            <optgroup  label="Select type">
                                <option value="Apartment">Apartment</option>
                                <option value="Houses">Houses</option>
                                <option value="Office">Office</option>
                                <option value="Lands">Lands</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-search">
                        <label for="Select any status">Sale/Rent</label>
                        <select>
                            <optgroup  label="Select city">
                                <option value="Sale">Sale</option>
                                <option value="Rent">Rent</option>                   
                            </optgroup>
                        </select>
                    </div>
                    <button  class="bot"type="submit" name ="btnn" >Find Now</button>
                </form>
            </div>

        </div>

   
     ///////////////////////////////////////////////////////////// -->
     <br><br><br><br><br><br>
   
    <section id="pro-content">
            <!-- <p>ADD IMAGES HARE</p> -->
        <div class="cont py-2">
            <div class="row mt-6">
                <?php
                include('connection.php');
                $query ="select * from propertylist";
                $query_row = mysqli_query($conn,$query);
                $check_property = mysqli_num_rows($query_row)>0;

                if($check_property){
                  while($row = mysqli_fetch_array($query_row))
                 {

                  ?>
                  <div class="col-md-4 mb-3">
                  <div class="card-pro">
                  <img src="<?php echo $row['image'];?>" height="240px" width="440px">
                  <h2><?php echo $row['property_title'];?> For <?php echo $row['soldrent'];?></h2>

                      <!-- <div class="card-body"> -->
                          <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;price:<?php echo $row['pro_price'];?></td> <td>&nbsp;&nbsp;&nbsp;&nbsp;land area:<?php echo $row['land_area'];?>  </td> </tr>
                          <tr> <td>&nbsp;&nbsp;&nbsp;balcony:<?php echo $row['balcony'];?></td>  <td>&nbsp;&nbsp;&nbsp;city:<?php echo $row['address'];?>          </td>    </tr>
                          <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;bathroom:<?php echo $row['bathroom'];?> </td> <td>&nbsp;&nbsp;&nbsp;&nbsp;kechen:<?php echo $row['kechen'];?>  </td>  </tr>
                          <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;hall:<?php echo $row['hall'];?></td> <td>&nbsp;&nbsp;&nbsp;&nbsp;bedroom:<?php echo $row['bedroom'];?> </td>   </tr><br>
                          <a href="details.php"><button class="details">See Details</button></a>
                      <!-- </div>  -->
                  </div>
              </div>
                  
                  <?php
                  
                 }   
                }
                else{
                    echo "no property found";
                }



                ?>
                
            </div> 
        </div>
    
</section>
<div class="col-lg-12 col-sm-12 recent-view">
       <h3><a href="about.php">More Details</a> </h3>
        <p>Real Estate Management System (rems) is web-based application. that takes care of everything that a real estate company wants to do.
             Property Management System is developed for real estate Companies. It is very strong and easy to use that makes quick properties 
             and account handling process. The real estate Property management system (rems)  is web-based software and you can access it from 
             anywhere.The application is easy to use and has user-friendly features and functionalities. It also has a simple and pleasant user
              interface to give end-users a better experience while using the web application.
<br><a href="about.php">Learn More</a></p>
         <p> It is very strong and easy to use that makes quick properties 
             and account handling process. The real estate Property management system (rems)  is web-based software and you can access it from 
             anywhere.The application is easy to use and has user-friendly features and functionalities. It also has a simple and pleasant user
              interface to give end-users a better experience while using the web application..<br><a href="about.php">Learn More</a></p>
          
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>