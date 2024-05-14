<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMS</title>
    
<link rel="stylesheet" type="text/css" href="style2.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"> -->
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
    <p class="rems">(REMS) <br>
          Find your favourite properties.</p> 
<!-- ////////////////////////////////////////////// -->

<!-- <h1 >it is best properties available for sale and rent</h1>; -->
<div class="image-slider">
    
<img class="mySlides" alt="Chitwan" src="img\slider\1.jpg">
<img class="mySlides" alt="butwal" src="img\property-9.jpg">
<img class="mySlides" alt="hetauda" src="img\slider\3.jpg">
<img class="mySlides" alt="butwal" src="img\slider\4.jpg">
<img class="mySlides" alt="butwal" src="img\property-5.jpg">
<img class="mySlides" alt="hetauda" src="img\property-1.jpg">
<img class="mySlides" alt="butwal" src="img\property-2.jpg">
<img class="mySlides" alt="Kathmandu" src="img\property-10.jpg">
<img class="mySlides" alt="hetauda" src="img\property-4.jpg">
<img class="mySlides" alt="butwal" src="img\property-6.jpg">
</div>



<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>

<!-- //////////////////PROPERTY ITEM///////////////////////////////////////////////// -->
<br><br><br><br>
<div class="col-lg-12 col-sm-12 recent-view">
       <h3><a href="about.php">About Us</a> </h3>
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
      
<section id="pro-content">
            <!-- - <p>ADD IMAGES HARE</p>  -->
        <div class="cont py-2">
            <div class="row mt-6">
                <?php
                include('connection.php');
                $query ="select * from propertylist";
                $query_row = mysqli_query($conn,$query);
                $check_property = mysqli_num_rows($query_row)>1;

                if($check_property){
                  while($row = mysqli_fetch_array($query_row))
                 {

                  ?>
                  <div class="col-md-4 mb-3">
                  <div class="card-pro">
                  <img src="<?php echo $row['image'];?>" height="240px" width="440px">
                  <h2><?php echo $row['property_title'];?> For <?php echo $row['soldrent'];?></h2>

                       <div class="card-body"> 
                          <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;price:<?php echo $row['pro_price'];?></td> <td>&nbsp;&nbsp;&nbsp;&nbsp;land area:<?php echo $row['land_area'];?>  </td> </tr>
                          <tr> <td>&nbsp;&nbsp;&nbsp;balcony:<?php echo $row['balcony'];?></td>  <td>&nbsp;&nbsp;&nbsp;city:<?php echo $row['address'];?>          </td>    </tr>
                          <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;bathroom:<?php echo $row['bathroom'];?> </td> <td>&nbsp;&nbsp;&nbsp;&nbsp;kechen:<?php echo $row['kechen'];?>  </td>  </tr>
                          <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;hall:<?php echo $row['hall'];?></td> <td>&nbsp;&nbsp;&nbsp;&nbsp;bedroom:<?php echo $row['bedroom'];?> </td>   </tr><br>
                        <button class="details">See Details</button>
                      </div>  
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


    <script>
      var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 5000); // Change image every 2 seconds
}


      ///////////////////////////////////////////////
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
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ////search/////// -->

    

    

</body>
</html>