<?php

	include('create_accHeader.php')

?>
				<h2 style="color:white; text-align: center;"><br><br>CREATE ACCOUNT</h2>
			<div >
				
				<form method="POST" autocomplete="off">
					<h2 style="color: white;">Username</h2>
					<div class="inputs">
						<input type="text" name="Username" value="" placeholder="Username" style="padding:10px;" required> 
					</div>

					<h2 style="color: white;">First Name</h2>
					<div class="inputs">
						<input type="text" name="Firstname" value="" placeholder="First Name" style="padding:10px;" required> 
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