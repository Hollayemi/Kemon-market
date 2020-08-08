<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','market');
if ($_SERVER['REQUEST_METHOD']=='POST'){

        $NUsername=$mysqli->real_escape_string($_GET['NUsername']);
        $CNPassword=md5($_GET['CNPassword']);
        $FPassword=md5($_GET['FPassword']);
        $NEmail=$mysqli->real_escape_string($_GET['NEmail']);
        $NPassword=md5($_POST['NPassword']);
        $NPhone=$mysqli->real_escape_string($_GET['NPhone']);

        $real_id       =  $_SESSION['user_info_id'];
        
        $sql2="SELECT id, username,password FROM users WHERE  password='$NPassword' and id='$real_id'";

        $run2=mysqli_query($mysqli,$sql2);

        $result2 = mysqli_fetch_array($run2,MYSQLI_NUM);
        echo $result2[2];
        if($result2[2]== $FPassword && $NPassword==$CNPassword){

                $num_of_rows=mysqli_num_rows($run2);
                            if($num_of_rows < 1){
                                $sql="UPDATE users SET(username,password, email,phone) VALUES ($NUsername','$NPassword','$NEmail','$NPhone' WHERE id='$real_id' )";

                                    $run=mysqli_query($mysqli,$sql);

                                    if($run){
                                        echo "<div style='background-color:green;width:100%;
                                        text-align: center;
                                        font-size:20px;
                                        color: #fff;'>Changed</div>";
                                    }else{
                                        echo "<div style='background-color:red;width:100%px;
                                        text-align: center;
                                        font-size:20px;
                                        color: #fff;'>Not Changed</div>";
                                                }
                                }else{
                                    echo "<div style='background-color:red;width:100%px;
                                            text-align: center;
                                            font-size:20px;
                                            color: #fff;'>Account already exist</div>";

                                }
                                                }
                    else{
                        echo "<div style='background-color:red;width:100%px;
                                text-align: center;
                                font-size:20px;
                                color: #fff;'>Password doesn't match</div>";
                    }

                }else {
                    echo "err";
                }
mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon"type="" href="pic/kemon.png" style="width: 150px;">
	<link rel="stylesheet" href="Register.css">
	<link rel="stylesheet" href="main.css"> 
	<title>Kemon</title>
</head>
<body style="background-color:#ccc;">



	<section id="login" style="align-items:center;">
		<div class="login">	
			<h2 style="color:white; text-align: center;"><br><br>CHANGE YOUR INFO</h2>
		<div >
				
        <form method="POST" autocomplete="off">

                <h2 style="color: white">Formal Password</h2>
						<div class="inputs">
						<input type="password" name="FPassword" value="" placeholder="Formal Password" style="padding:10px;" required>
                    </div>

					<h2 style="color: white">New Password</h2>
						<div class="inputs">
						<input type="password" name="NPassword" value="" placeholder="New Password" style="padding:10px;" required>
                    </div>

                    <h2 style="color: white">Confirm New Password</h2>
						<div class="inputs">
						<input type="password" name="CNPassword" value="" placeholder="Confirm New Password" style="padding:10px;" required>
                    </div>
                    
                    <h2 style="color: white;">New Username</h2>
					<div class="inputs">
						<input type="text" name="NUsername" value="" placeholder="New Username" style="padding:10px;" required> 
					</div>
					
					<h2 style="color: white">New Email</h2>
								<div class="inputs">
						<input type="email" name="NEmail" value="" placeholder="New E-mail" style="padding:10px;" required>
					</div>
		 		    <h2 style="color: white">New Phone Number</h2>
					<div class="inputs">
						<input type="text" name="NPhone" value="" placeholder="New Phone number" style="padding:10px;" required>
					</div>
          			

					<div class="login_button Create_Acc">
						<input type="submit" value="Change">
					</div>
			</form>
		</div>
			<h3 class="password"><a href="#" onclick="alert('')">Forget password </a>| <a href="login_form.php">Already have an account </a></h3>
		</div>
	</section>


	<footer id="all_footer">
        <div class="About_me">
            <a href="pic/my_pic.jpg" class="me"><img src="pic/my_pic.jpg" alt="" width="100" height="150"></a>
        
        
        </div>

        

	</footer>
</body>
</html>