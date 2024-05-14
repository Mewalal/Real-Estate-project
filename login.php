<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="style2.css"> -->
    <link rel ="stylesheet" type="text/css" href="register.css">
	<!-- <script defer src="script.js"></script> -->
</head>
<body>


 <!-- <div class="nav-bar">
        <img src="logo.jpeg">
        <div class="manu_right">
            <span onclick="myfunction()">&#9776;</span>

            <ul id="menu"> 
            <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="register.php">Properties</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="logout.php">Logout</a></li>
                
            </ul>
        </div>
    </div> -->

	
    <?php
    include 'connection.php'; 

    if(isset($_POST['submit'])){

        $email =  $_POST['email'];
        $password =  $_POST['password'];
          
        $email_search = "select * from register  where email= '$email'";
        $query = mysqli_query($conn , $email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];

			$_SESSION['username'] = $email_pass['username'];

             
            // $pass_decode = password_verify($password, $db_pass);

            if($password === $db_pass){
				?>
				<script>
					location.replace("home.php");
				</script>
				<?php
            }
            else{
                ?>
				<script>
					alert("password incorrect");
				</script>
				<?php
				
              
            }       

        }
        else{
            ?>
            <script>
                alert("invalid email");
            </script>
            <?php
        }

    }
    ?>
	
	


 
<div class="container">
	<div class="header">
		<h2>LOGIN</h2>
	</div>
	<form  action ="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post"  id="form" class="form">
		<div class="form-control">
			<label for="email">Email</label>
			<input type="email" name="email" placeholder="Enter email" id="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" name="password" placeholder="Password" id="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<button type="submit" name="submit">LOGIN</button>
		
		<div class="form-control">
			<p>Not Have an account? <a href="register.php">create account</a></p>
		</div>
	</form>
</div>


</body>
</html>