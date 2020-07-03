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
	<section id="login" style="align-items:center;">
		<div class="login">
		<a href="index.php"><img src="pic/home.png" alt="" title="Home" style="color:#fff;"></a>

<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','market');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$inputUsername=$mysqli->real_escape_string($_POST['Username']);
	$inputPassword=$mysqli->real_escape_string($_POST['Password']);

	$sql="SELECT id,username,password,email FROM users Where username='$inputUsername'";
	$rub_sql=$mysqli->query($sql);
	$result=mysqli_fetch_array($rub_sql,MYSQLI_ASSOC);
	if($result){
		
		$chk_password=$result['password'];
		$chk_username=$result['username'];
		$chk_id=$result['id'];
		$hashedPassword=md5($_POST['Password']);
		if($chk_password==$hashedPassword && $inputUsername=="Admin"){
			$chk_username=$result['username'];
			echo "Status:Logged in";
			header("location:Admin.php");
	}
			elseif($chk_password==$hashedPassword && $inputUsername==$chk_username){
				
				$chk_username=$result['username'];
				$_SESSION['user_info_id']=$chk_id;
				$_SESSION['user_info']=$chk_username;
				echo "Status:Logged in";
				header("location:Register.php");
			}else{
				echo "<div style='margin-left:30%;

								color:red;
								font-size:15px;
				'>Status: you are not logged in</div>";
			}
	}else{
		echo "<div style='margin-left:30%;
								
								color:red;
								font-size:15px;
				'>Status: Invalid Password</div>";
			}

}
	
?>
			<!---<img src="pic/b.png" class="img" width="120" height="100">-->
			<h2 style="color:white; text-align: center; "><br><br>LOGIN FORM </h2>
			<div >
				
				<form method="POST">
					<h2 style="color: white;">Username</h2>
					<div class="inputs">
						<input type="text" name="Username" value="" placeholder="Username" style="padding:10px;">
					</div>
					<h2 style="color: white">Password</h2>
					<div class="inputs">
						<input type="password" name="Password" value="" placeholder="Password" style="padding:10px;">
					</div>
					<div class="login_button Create_Acc">
						<input type="submit" value="Login"  title="Login">
					</div>
				</form>

			</div>
			<h3 class="password"><a href="#" onclick="alert('')">Forget password </a>| <a href="create_acc.php">Create Account</a></h3>
		</div>
	</section>
	<footer>
		

	</footer>

</body>

</html>