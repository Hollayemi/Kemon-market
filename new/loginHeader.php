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
			<h2 style="color:white; text-align: center; "><br><br>LOGIN FORM </h2>
			<div >
	