<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE ACCOUNT</title>
    <link rel ="stylesheet" type="text/css" href="register.css">
	<!-- <script defer src="script.js"></script> -->
	<style>
		.error{
			color:red;
		}
	</style>
</head> 
<body>
	<?php
	include 'connection.php';
	
	if(isset($_POST['submit'])){
		
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		
		$password = mysqli_real_escape_string($conn,  $_POST['password']);

		$password2 = mysqli_real_escape_string($conn,  $_POST['password2']);
		
	
         
		
		   $emailquery = "select * from register  where email= '$email' ";
		   $query = mysqli_query($conn,$emailquery);
 
		   $emalicount = mysqli_num_rows($query); 
		   if(!preg_match("/^[a-zA-Z\s]+$/",$username))
		   {
			?>
			<script> 
				alert('Username only in alphabet');
			</script>
			<?php
		  }
          else{
		   if($emalicount >0 ){ 
		              	?>
						<script> 
							alert('Email alredy exits');
						</script>
						<?php
			 		
		       	}
			 	  else {
					   
					   ////////////////
					   if($password === $password2){

								$insertquery = "insert into register(username,email,password,password2)
								values('$username','$email','$password','$password2')";
							$q = mysqli_query($conn, $insertquery);
							if($q==1){
								header('location:login.php');
								?>
								<script> 
									alert("Register success");
								</script>
								<?php
								
							}else{
								?>
								<script>
									alert('Register unsuccess');
								</script>
								<?php
								
		
							}
					   }else{
						?>
						<script> 
							alert('Rassword not match');
						</script>
						<?php
						 
					   }
				}
		}
	
	}
	?>


<div class="container">
	<div class="header">
		<h2>REGISTRATION</h2>
	</div>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="form" class="form">
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" name="username" placeholder="Enter username" id="username" required/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			
		</div>
		<div class="form-control">
			<label for="username">Email</label>
			<input type="email" name="email" placeholder="Enter email" id="email" required />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" name="password"  placeholder="Password" id="password" required/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password check</label>
			<input type="password" name="password2" placeholder="Password confirm " id="password2" required/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<button type="submit" name="submit">Register</button>
		<div class="form-control">
			<p>Have an account? <a href="login.php">Log In</a></p>
		</div>
	</form>
</div>


</body>
</html>