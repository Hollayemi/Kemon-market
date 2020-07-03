<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon"type="" href="pic/kemon.png" style="width: 150px;">
	<link rel="stylesheet" href="Register.css">
	<link rel="stylesheet" href="main.css"> 
	<title>Login</title>
</head>
<body style="background-color:#ccc;">

<?php
session_start();
$_SESSION['message']="";
?>

	<section id="login" style="align-items:center;">
		<div class="login">	
			<!---<img src="pic/b.png" class="img" width="120" height="100">-->
			

			<?php

		$mysqli=mysqli_connect('localhost','root','','market');

		if ($_SERVER['REQUEST_METHOD']=='POST'){

		if($_POST['Password']==$_POST['ConfirmPassword']){

		$Username=$mysqli->real_escape_string($_POST['Username']);
		$Email=$mysqli->real_escape_string($_POST['Email']);
		$Password=md5($_POST['Password']);
		$Phone=$mysqli->real_escape_string($_POST['Phone']);

		$_SESSION['Username']='Username';
		$_SESSION['Email']='Email';
		
		$sql2="SELECT username,password FROM users WHERE username='$Username' and password='$Password'";

		$run2=mysqli_query($mysqli,$sql2);

		$num_of_rows=mysqli_num_rows($run2);
		if($num_of_rows < 1){
			$sql="INSERT INTO users (id,username,password, email,phone) VALUES ('NULL','$Username','$Password','$Email','$Phone')";

				$run=mysqli_query($mysqli,$sql);

				if($run){
					echo "<div style='background-color:green;width:100%;
					text-align: center;
					font-size:20px;
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
					color: #fff;'>Submitted</div>";
				}else{
					echo "<div style='background-color:red;width:100%px;
					text-align: center;
					font-size:20px;
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
					color: #fff;'>Not Submitted</div>";
				}
		}else{
			echo "<div style='background-color:red;width:100%px;
					text-align: center;
					font-size:20px;
					box-shadow: 0 4px 8px 0 rgba(re), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
					color: #fff;'>Account already exist</div>";

		}
			}
		else{
			echo "<div style='background-color:red;width:100%px;
					text-align: center;
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
					font-size:20px;
					color: #fff;'>Password doesn't match</div>";
		}

		}
		else{
			 
		}
	mysqli_close($mysqli)
?>
				<h2 style="color:white; text-align: center;"><br><br>CREATE ACCOUNT</h2>
			<div >
				
				<form method="POST" autocomplete="off">
					<h2 style="color: white;">Username</h2>
					<div class="inputs">
						<input type="text" name="Username" value="" placeholder="Username" style="padding:10px;" required> 
					</div>
					<h2 style="color: white">Password</h2>
					<div class="inputs">
						<input type="password" name="Password" value="" placeholder="Password" style="padding:10px;" required>
					</div>

					<h2 style="color: white">Confirm Password</h2>
								<div class="inputs">
								<input type="password" name="ConfirmPassword" value="" placeholder="Confirm Password" style="padding:10px;" required>
					</div>
					
					<h2 style="color: white">Email</h2>
								<div class="inputs">
						<input type="email" name="Email" value="" placeholder="E-mail" style="padding:10px;" required>
					</div>
		 		    <h2 style="color: white">Phone Number</h2>
					<div class="inputs">
						<input type="text" name="Phone" value="" placeholder="Phone number" style="padding:10px;" required>
					</div>
          			

					<div class="login_button Create_Acc">
						<input type="submit" value="Sign Up">
					</div>
				</form>
			</div>
			<h3 class="password"><a href="#" onclick="alert('')">Forget password </a>| <a href="login_form.php">Already have an account </a></h3>
		</div>
	</section>
	<footer>		
	</footer>
</body>
</html>