<?php
session_start();
$_SESSION['message']="";
$mysqli=mysqli_connect('localhost','root','','market');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Register.css">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="shortcut icon"type="" href="pic/kemon.png" style="width: 150px;">
  <link rel="stylesheet" href="bootstrap-4.5.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome.min.css">
  <title>Kemon</title>
  <script src="jquery-3.3.1.slim.min.js" ></script>
  <script src="popper.min.js" ></script>
  <script src="bootstrap-4.5.0/dist/js/bootstrap.min.js" ></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
<body style="background-color: #FFF">
<div class="col" style="border: 10px solid #4CAF50;">
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
        </div>




  <div class="reg_btn" style="background-color:#4CAF50;">
  <a href="create_acc.php"><span>Register</span></a>
  </div>
  <div class="reg_form">

  
  <section id="Registration_all" style="align-items:center;">
		<div class="Registration">	
			<!---<img src="pic/b.png" class="img" width="120" height="100">-->
			<div >
				
            <form method="POST" autocomplete="off" >
            <fieldset class="display_forms">

                    <h2 style="color:black;">Search by Shop name</h2>
                    <div class="inputs">
                      <input type="text" name="Search_City" value="" placeholder="Shop Name" style="padding:10px;" required> 
                    </div>
                    

                    
                   </div>

             
              <div class="login_button Create_Acc">
                <input type="submit" value="Search" style="background-color:#4CAF50;">
              </div>
            </fieldset>
		</form>
			</div>
		</div>
    </section>

<style>
table{
    width:100%;
}
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
    margin-left:0%;
    margin-right:10%;
    margin-top:30px;
    margin-bottom:130px;
}
th, td {
    padding: 5px;
}
</style>



<table style="width:100%">
  <tr>
    <th>Shop Name</th>
    <th>Junction</th>		
    <th>Bustop</th>
    <th>Description</th>
  </tr>


<?php
$mysqli=mysqli_connect('localhost','root','','market');

if ($_SERVER['REQUEST_METHOD']=='POST'){

		$Search_City     =  $mysqli->real_escape_string($_POST['Search_City']);

$sql="SELECT shop_name,bustop,junction,more FROM users WHERE shop_name='$Search_City'";

$run=mysqli_query($mysqli,$sql);

if($run){

    while($row = mysqli_fetch_assoc($run)) {
        $shop_name      =       $row["shop_name"];
        $junction       =       $row["junction"];
        $bustop         =       $row["bustop"];
        $desc           =       $row["more"];
   
?>


  <tr>
    <td><?php echo $shop_name ?> </td>
    <td><?php echo $junction ?> </td>		
    <td><?php echo $bustop ?> </td>
    <td><?php echo $desc ?></td>
  </tr>
  

    
<?php  }

}
}

mysqli_close($mysqli)
?>


</table>





    <?php

    for($t= date("s"); $t <=52; $t++){
        echo "<img src='pic/f".$t.".jpg' alt'Advert' width='60%' height='650' style=margin-left:20%;";
        echo $t;
    }

    echo date("s")
      
        ?>
      <br><br><br>
      <!-- <h5 style="margin-left:10%;">for more of your ankara styles, visit <?php header("location:Register.php")?>Awesome-wears </a> for more information</h5> -->


<footer id="all_footer" style="background-color:#4CAF50 !important; ">
        <div class="About_me">
            <span><h6 class="name">Posted by: Oluwasusi Stephen</h6>
                  <h6>Contact information: <a href="mailto:stephanyemmitty@gmail.com" sty>stephanyemmitty@gmail.com</a></h6>
                  <h6>Phone number: <a href="tel:09075994830">09075994830</a></h6>
                  <h6 class="my_pages">Join our page on</h6>
                  <a href="#"><img src="pic/facebook.png" alt="" width="30" height="25"></a>
                  <a href="#" class="green"><img src="pic/whatsapp_PNG20.png" alt="" width="30" height="25"></a>
                  <a href="#"><img src="pic/twitter.png" alt="" width="30" height="25"></a>
            </span>

            <span><h6 class="name">Posted by: Oluwasusi Stephen</h6>
                  <h6>Contact information: <a href="mailto:stephanyemmitty@gmail.com" sty>stephanyemmitty@gmail.com</a></h6>
                  <h6>Phone number: <a href="tel:09075994830">09075994830</a></h6>
                  <h6 class="my_pages">Join our page on</h6>
            </span>


        </div>
      <span class="text-center">
        <p>Made with <i class="fa fa-heart-o"></i> by Stephanyemmitty</p>
    </span> 

  </footer>


<script>
var x = document.getElementById("Registration_all");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;	
}
</script>

  </div>
    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>


</body>

<!-- Mirrored from www.hoschools.com/css/tryit.asp?filename=trycss_navbar_horizontal_responsive by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2017 05:38:36 GMT -->
</html>
