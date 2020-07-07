<?php
include("header.php");
$_SESSION['message']="";
$mysqli=mysqli_connect('localhost','root','','market');
?>
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

                    <h2 style="color:black;">Search</h2>
                    <div class="inputs">
                      <input type="search" name="Search_City" value="" placeholder="search"  style="padding:10px;" required>  
               
                   </div>
<br>
               
                <input class="login_button Create_Acc" type="submit" value="Search" style="background-color:#4CAF50;"></input>
                
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

		$Search     =  $mysqli->real_escape_string($_POST['Search_City']);

  if ($Search != "we" OR "and"){

    $sql="SELECT shop_name,bustop,junction,more FROM users WHERE more LIKE '%$Search%' OR shop_name LIKE '%$Search%' OR bustop LIKE '%$Search%' OR junction LIKE '%$Search%'";

    $run=mysqli_query($mysqli,$sql);
    $queryRun = mysqli_num_rows($run);

    if ($queryRun > 0){

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
<div class="About_me cent">
            
            <span>
                <img src="pic/kemon.png" alt="" style="height:250px; margin-top:15px;border-radius:100%;">
            </span>
            <span>
                  <h6  style="margin-top:15px;margin-bottom:-20px;font-size:20px;">About us:</h5>
                  <h6 class="name">Posted by: Oluwasusi Stephen</h6>
                  <h6>Contact information: <a href="mailto:stephanyemmitty@gmail.com" sty>stephanyemmitty@gmail.com</a></h6>
                  <h6>Phone number: <a href="tel:09075994830">09075994830</a></h6>
                  <h6 class="my_pages">Join our page on</h6>
                  <div style="background-color:#4d94ff; width:160px; border-radius:10px;">
                    <a href="#"><img src="pic/facebook.png" alt="" style="width:50px; padding:10px"></a>
                    <a href="#" class="green"><img src="pic/whatsapp_PNG20.png" alt="" style="width:50px; padding:10px;"></a>
                    <a href="#"><img src="pic/twitter.png" alt=""  style="width:50px; padding:10px"></a>
                  </div>
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

    function toggleNav(){
      document.querySelector(".holla").classList.toggle("navbar--open");
    }
</script>
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
