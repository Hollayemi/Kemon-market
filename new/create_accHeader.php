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
						$Firstname=$mysqli->real_escape_string($_POST['Firstname']);
						$Email=$mysqli->real_escape_string($_POST['Email']);
						$Password=md5($_POST['Password']);
						$Phone=$mysqli->real_escape_string($_POST['Phone']);

						$_SESSION['Username']='Username';
						$_SESSION['Email']='Email';
						
						$sql2="SELECT username,password FROM users WHERE username='$Username' and password='$Password'";

						$run2=mysqli_query($mysqli,$sql2);

						$num_of_rows=mysqli_num_rows($run2);


						if($num_of_rows < 1){
							$sql="INSERT INTO users (id,username,firstname,password, email,phone) VALUES ('NULL','$Username','$Firstname','$Password','$Email','$Phone')";

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
						}
						else
						{
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