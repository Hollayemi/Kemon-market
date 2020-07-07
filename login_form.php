<?php
	include('loginHeader.php')
?>
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
<?php
	include('loginFooter.php')
?>