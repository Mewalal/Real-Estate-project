<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMS</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<!-- <link rel="stylesheet" type="text/css" href="admin.css"> -->
<link rel="stylesheet" type="text/css" href="ccss/font-awesome.min.css">

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

<section id="view-content">
    <p id="view">PROPERTY LIST</p>
     <!-- <div class="view-cont">
        <div class="view-box"> -->
            <table class="content-table"> 
                <thead>
                    <tr> 
                    <th>Id</th>
                    <th>pro_Title</th>
                    <th>Land_area</th>
                    <th>Pro_price</th>
                    <th>address</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Sold</th>
                    <th>Kechen</th>
                    <th>Hall</th>
                    <th>Bedroom</th>
                    <th>Bathroom</th>
                    <Th>Balcony</Th>
                    <th colspan="2" class="opent">Operation</th>
                    </tr>

                </thead>
                <tbody>
                   
                <?php
                include 'connection.php';  

                    $selectquery = "select * from propertylist" ;
                    $query = mysqli_query($conn,$selectquery);

                    // $row = mysqli_num_rows($querydisplay);
                    while($result = mysqli_fetch_array($query)){  

                        ?>
                            <tr>
                              <td><?php echo $result['Id'];?> </td>
                              <td><?php echo $result['property_title'];?></td>             
                            <td><?php echo $result['land_area'];?></td>
                              <td><?php echo $result['pro_price'];?></td>
                              <td><?php echo $result['address'];?></td>
                              <td><?php echo $result['description'];?></td>
                              <td><img src="<?php echo $result['image'];?>" height="140px" width="190px"></td>
                              <td><?php echo $result['soldrent'];?></td>
                              <td><?php echo $result['kechen'];?></td>
                               <td><?php echo $result['hall'];?></td>
                              <td><?php echo $result['bedroom'];?></td>
                              <td><?php echo $result['bathroom'];?></td>
                              <td><?php echo $result['balcony'];?></td>
                              <td> <a href="update.php?id=<?php echo $result['Id'];?> " data-toggle="tooltip" aria-hidden="true" data-placement="bottom" title="Update"> <i class="fa fa-edit" > </i> </a></td>
                               <td><a href="delete.php?idd=<?php echo $result['Id'];?> " data-toggle="tooltip" aria-hidden="true"  data-placement="bottom" title="Delete"><i class="fa fa-trash" ></i></a> </td>
                             
                             </tr>

                        <?php
                      }     
                ?>  
                </tbody>  
                
            </table>
        <!-- </div>    
    </div>
     -->
</section>
    <!-- /////////admin panel// START/////////////////// -->
    <section id="sidebar">
       <div class="sidebar"></div>
            <h3>ADMIN PANEL</h3>
            
        
        
          <div class="sidebar-menu"> 
          <ul class="uloo">
                 <li class="lioo"><a  id="ao" href="dashboard.php"><div class="fa fa-desktop"><div class="admdas">Dashboard</div></div></a></li>
                 <li class="lioo"><a  id="ao" href="addproperty.php"><div class="fa fa-users"><div class="admdas">Add property</div></div></a></li>
                 <!-- <li class="lioo"><a  id="ao" href="addimage.php"><div class="fa fa-file"><div class="admdas">Add property image</div></div></a></li> -->
                 <li class="lioo"><a  id="ao" href="prorptyview.php"><div class="fa fa-file-o"><div class="admdas">Property view</div></div></a></li> <br>
                 <li class="lioo"><a  id="ao" href="adminlogout.php"><div class="fa fa-sign-out"><div class="admdas">Logout</div></div></a></li>

             </ul>

         </div>
         </section>


         <script>
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        
    </body>
</html>