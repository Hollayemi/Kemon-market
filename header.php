<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="Register.css">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="test.css">
  <link rel="shortcut icon"type="" href="pic/kemon.png" style="width: 150px;">
  <link rel="stylesheet" href="bootstrap-4.5.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome.min.css">
  <title>Kemon-market</title>
  <script src="jquery-3.3.1.slim.min.js" ></script>
  <script src="popper.min.js" ></script>
  <script src="bootstrap-4.5.0/dist/js/bootstrap.min.js" ></script>
  <script src="https://js.paystack.co/v1/inline.js"></script> 

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: #FFF ">
<header>
<img src="pic/kemon.png" alt="" width=50 height=50 class="small_logo">
<div>
    <button onclick="toggleNav()" class="dehaze" style="background-color:#00b8e6;"><img src="material/dehaze@2x.png" alt=""></button>
    
</div>

    <nav  class="holla">
    <div>
    <button class="close_nav" onclick="toggleNav()"><img src="material/close@2x.png" alt=""></button><br><br>
    </div>

			<div>
				<img src="pic/kemon.png" alt="" width=100 height=80>
      </div>
      
      

			<div>
				<ul class="anchors">

					<li><a href="index.php"> Home</a></li>

					<li><a href="Request.php">Shop</a></li>

          <li><a href="#">Subscription</a>

            <ul class="subscription">
              <li><a href="3monthssubscription.php">3 Months for <?php echo $_SESSION['month3'] ?></a></li>
              <li><a href="3monthssubscription.php">2 Months for <?php echo $_SESSION['month2'] ?></a></li>
              <li><a href="3monthssubscription.php">1 Month for <?php echo $_SESSION['month1'] ?></a></li>

            </ul>

        </li>

          <li><a href="#">Contact us</a>
        
              <ul class="contact">
                <li><a href="pic/ft-fb.gif"><img src="pic/ft-fb.gif" alt=""></a></li>
                <li><a href="pic/ft-in.gif"><img src="pic/ft-fin.gif" alt=""></a></li>
                <li><a href="pic/ft-twi.gif"><img src="pic/ft-twi.gif" alt=""></a></li>
              </ul>

        </li>


				</ul>
			</div>
		</nav>
	</header>


<!-- <div class="col" style="background-color:#4CAF50;">
</div> -->
<div id="SLIDER">
<div id="headerSlide" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="pic/watch.png" width="10" height="50%" alt="Second slide"alt="First slide">
      <div class="carousel-caption">
       
    </div>
    <!---http://www.ie-wallpapers.com/data/out/238/38190080-wallpaper-google.pn---->
  </div>

 
    <div class="carousel-item">
      <img class="d-block img-fluid" src="pic/Drugs.jpg" width="10" height="50%" alt="Second slide"alt="First slide">
      <div class="carousel-caption">
      
    </div>
    <!---http://www.ie-wallpapers.com/data/out/238/38190080-wallpaper-google.pn---->
  </div>

    <div class="carousel-item">
      <img class="d-block img-fluid" src="pic/market.jpg" width="10" height="50%" alt="Second slide"alt="First slide">
      <div class="carousel-caption">
 
    </div>
    <!---http://www.ie-wallpapers.com/data/out/238/38190080-wallpaper-google.pn---->
  </div>

    <div class="carousel-item">
      <img class="d-block img-fluid" src="pic/came.jpg" width="10" height="30%" alt="Second slide"alt="First slide">
      <div class="carousel-caption">
    </div>
    <!---http://www.ie-wallpapers.com/data/out/238/38190080-wallpaper-google.pn---->
  </div>

  <div class="carousel-item">
      <img class="d-block img-fluid" src="pic/coffee.jpg" width="10" height="30%" alt="Second slide"alt="First slide">
      <div class="carousel-caption">
    </div>
    <!---http://www.ie-wallpapers.com/data/out/238/38190080-wallpaper-google.pn---->
  </div>
  
    <div class="carousel-item">
      <img class="d-block img-fluid" src="pic/people.jpg" width="10" height="50%" alt="Second slide"alt="First slide">
      <div class="carousel-caption">
    </div>
    <!---http://www.ie-wallpapers.com/data/out/238/38190080-wallpaper-google.pn---->
  </div>
    <div class="carousel-item ">
      <img class="d-block img-fluid" src="pic/drug.jpg" width="10" height="50%" alt="Second slide">
      <div class="carousel-caption">
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="pic/ear.jpg" width="10" height="50%" alt="Second slide" alt="Third slide">
      <div class="carousel-caption">
    </div>
    </div>
  </div>
    </div>
    </div>
        </div>