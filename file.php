<?php
session_start();
$_SESSION['message']="";
$mysqli=mysqli_connect('localhost','root','','market');

if ($_SERVER['REQUEST_METHOD']=='POST'){
		$Shop_Name     =  $mysqli->real_escape_string($_POST['Shop_Name']);
		$Junction      =  $mysqli->real_escape_string($_POST['Junction']);
    $Bustop        =  $mysqli->real_escape_string($_POST['Bustop']);
    //$City          =  $mysqli->real_escape_string($_POST['Shop_City']);
    $Shop_Line     =  $mysqli->real_escape_string($_POST['Shop_Line']);
    $pic_path     =  $mysqli->real_escape_string('images/'.$_FILES['file']['name']);
    $Desc          =  $mysqli->real_escape_string($_POST['Desc']);
    $real_id       =  $_SESSION['user_info_id'];
   

    if(preg_match("!image!",$_FILES['file']['type'])){

        if (copy($_FILES['file']['tmp_name'],$pic_path)){

            $_SESSION['Username']='Username';
            $_SESSION['Email']='Email';
            $_SESSION['picture']='$pic_path';

		$sql="UPDATE users SET shop_name='$Shop_Name',bustop='$Bustop',junction='$Junction',shop_line='$Shop_Line',more='$Desc' WHERE id='$real_id'";

				$run=mysqli_query($mysqli,$sql);

				if($run){
					echo "<div style='background-color:green;width:100px;
					text-align: center;
					font-size:20px;
					color: #fff;
					margin-top:10px;
					margin-left:8%;'>Submitted</div>";
				}else {
          echo "<div style='background-color:Red;width:150px;
					text-align: center;
					font-size:20px;
					color: #fff;
					margin-top:10px;
					margin-left:8%;'>Not Submitted</div>";
        }
            }

        }              
}
	mysqli_close($mysqli)
?>

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
        </div>




  <div class="reg_btn">
    <a href="Request.php"><span>Shop</span></a>
  </div>
  <div class="reg_form">

  
  <section id="Registration_all" style="align-items:center;">
		<div class="Registration">	
			<!---<img src="pic/b.png" class="img" width="120" height="100">-->
			<div >
				
				<form method="POST" autocomplete="off" >
            <fieldset class="display_forms">

                    <h2 style="color:black;">Shop Details</h2>
                    <div class="inputs">
                      <input type="text" name="Shop_Name" value="" placeholder="Shop's Name" style="padding:10px;" required> 
                    </div><br>
                    <div class="inputs">
                      <input type="text" name="Junction" value="" placeholder="Nearest Junction" style="padding:10px;" required>
                    </div><br>

                    <div class="inputs">
                      <input type="text" name="Bustop" value="" placeholder="Nearest Bustop" style="padding:10px;" required>
                    </div><br>

                    <div class="inputs">
                      <input type="text" name="Shop_City" value="" placeholder="City" style="padding:10px;" required> 
                    </div><br>
                
                    <div class="inputs">
                      <input type="file" name="file" value="" placeholder="City" style="padding:10px;" required> 
                    </div><br>

                    <div class="inputs">
                      <input type="text" name="Shop_Line" value="" placeholder="Shop's Line" style="padding:10px;" required>
                    </div><br>

                  
                    

              
             <!-- 
               <div class="col_2">

                  <div class="inputs">
                      <input type="text" name="Shop_Name" value="" placeholder="Shop's Name" style="padding:10px;" required> 
                    </div><br>
                    <div class="inputs">
                      <input type="text" name="Junction" value="" placeholder="Nearest Junction" style="padding:10px;" required>
                    </div><br>

                    <div class="inputs">
                      <input type="text" name="Bustop" value="" placeholder="Nearest Bustop" style="padding:10px;" required>
                    </div><br>
                
                    <div class="inputs">
                      <input type="text" name="Shop_Line" value="" placeholder="Shop's Line" style="padding:10px;" required>
                    </div><br>

             
              -->     


             </div>

             
             <div class="inputs">
                      <textarea name="Desc" id="Desc" cols="50" rows="5" placeholder="Description" required></textarea>
                    </div><br>

              <div class="login_button Create_Acc" style="margin-bottom:75px;">
                <input type="submit" value="Register">
              </div>
            </fieldset>
				</form>
      </div>

      <section id="premium">
            <div>

                <h5>Advertise Your Product</h5>

                <h6>Gold</h6>

                <h6 style="background-color:red;"><a href="#">BUY</a></h6>

            </div>

            <div>
                
            </div>

            <div>
                
            </div>
      </section>


      <?php
    for($t= date("s"); $t <=52; $t++){
        echo "<img src='pic/f".$t.".jpg' alt'Advert' width='60%' height='650' style=margin-left:20%;";
        echo $t;
    }

    echo date("s")
      
        ?>
      <br><br><br>
      <h5 style="margin-left:10%;">for more of your ankara styles, visit <?php header("location:Register.php")?>Awesome-wears </a> for more information</h5>
			<h3 class="password" style="color:black; !important,margin-left:15%;"><a href="Edit.php"><br><br><br><br>Change your account info </a></h3>
		</div>
  </section>
  
  <section class="advert">
      
  </section>



	<footer id="all_footer">
        <div class="About_me">
            <span><a href="pic/my_pic.jpg"><img src="pic/my_pic.jpg" alt="" width="100" height="150"></a></span>
            <span><h6 class="name">Posted by: Oluwasusi Stephen</h6>
                  <h6>Contact information: <a href="mailto:stephanyemmitty@gmail.com" sty>stephanyemmitty@gmail.com</a></h6>
                  <h6>Phone number: <a href="tel:09075994830">09075994830</a></h6>
                  <h6 class="my_pages">Join our page on</h6>
            </span>

        </div>
        <div class="social_media">
          <a href="#"><img src="pic/facebook.png" alt="" width="30" height="25"></a>
          <a href="#" class="green"><img src="pic/whatsapp_PNG20.png" alt="" width="30" height="25"></a>
          <a href="#"><img src="pic/twitter.png" alt="" width="30" height="25"></a>
        </div>
      <span class="text-center">
        <p>Made with <i class="fa fa-heart-o"></i> by Stephanyemmitty</p>
    </span> 

  </footer>
  


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
