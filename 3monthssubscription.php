<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="Register.css">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="shortcut icon"type="" href="pic/kemon.png" style="width: 150px;">
  <link rel="stylesheet" href="bootstrap-4.5.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome.min.css">
  <script src="jquery-3.3.1.slim.min.js" ></script>
  <script src="popper.min.js" ></script>
  <script src="bootstrap-4.5.0/dist/js/bootstrap.min.js" ></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: #FFF">
<div class="col" style="background-color:#4CAF50;">
</div>
<div id="SLIDER">
  
<div id="headerSlide" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#headerSlide" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlide" data-slide-to="1"></li>
    <li data-target="#headerSlide" data-slide-to="2"></li>
    <li data-target="#headerSlide" data-slide-to="3"></li>
    <li data-target="#headerSlide" data-slide-to="4"></li>
    <li data-target="#headerSlide" data-slide-to="5"></li>
    <li data-target="#headerSlide" data-slide-to="6"></li>
    <li data-target="#headerSlide" data-slide-to="7"></li>
  </ol>

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
  
  <a class="carousel-control-prev" href="#headerSlide" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlide" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span> 
    <span class="sr-only">Next</span>
  </a>
    </div>
    </div>
       

<?php
session_start();
$mysqli=mysqli_connect('localhost','root','','market');
$user_id=$_SESSION['user_info_id'];
	$sql="SELECT id,username,shop_name,password,email,City FROM users Where id='$user_id'";
	$rub_sql=$mysqli->query($sql);
  $result=mysqli_fetch_array($rub_sql,MYSQLI_ASSOC);
  if($result){
    $username=$result['username'];
    $shop=$result['shop_name'];
    $email=$result['email'];
    $city=$result['City'];
  }
?>
<section style="text-align:center;">
<br><br>

<h5 style="font-size: medium;">Dear <?php echo $username?>, you are about to make 3 months subscription for
         <?php echo $shop?> in 
         <?php echo $city?> which will cost you <?php echo $_SESSION['month3']?></h5>

         <br>
         
         <a href="#"><button>Continue</button></a>

</section>


</body>
</html>