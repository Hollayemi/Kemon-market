<?php
include('regNav.php');
include('header.php');
$_SESSION['message']="";
$mysqli=mysqli_connect('localhost','root','','market');

if ($_SERVER['REQUEST_METHOD']=='POST'){
		$Shop_Name     =  $mysqli->real_escape_string($_POST['Shop_Name']);
		$Junction      =  $mysqli->real_escape_string($_POST['Junction']);
    $Bustop        =  $mysqli->real_escape_string($_POST['Bustop']);
    $City          =  $mysqli->real_escape_string($_POST['Shop_City']);
    $Shop_Line     =  $mysqli->real_escape_string($_POST['Shop_Line']);
    $Desc          =  $mysqli->real_escape_string($_POST['Desc']);
    $real_id       =  $_SESSION['user_info_id'];
    $_SESSION['Username']='Username';
    $_SESSION['shop_name']='$Shop_Name';
    $_SESSION['shop_line']='$Shop_Line';
		$_SESSION['Email']='Email';

		$sql="UPDATE users SET shop_name='$Shop_Name',bustop='$Bustop',junction='$Junction',shop_line='$Shop_Line',more='$Desc',City='$City' WHERE id='$real_id'";

        $run=mysqli_query($mysqli,$sql);
        if($run){
          echo "<div style='background-color:green;width:150px;
          text-align: center;
          font-size:20px;
          color: #FFF;
          width:100%;'>Submitted</div>";
    }else{
      echo "<div style='background-color:#f0ff;width:150px;
      text-align: center;
      font-size:20px;
      color: #fff;
      width:100%;'>Not Submitted</div>";
    }

			}
	mysqli_close($mysqli)
?>

 <div class="reg_btn">
    <a href="Request.php"><span>Shop</span></a>
  </div>
  <div class="reg_form">

  
  <section id="Registration_all" style="align-items:center;">
		<div class="Registration">	
			<!---<img src="pic/b.png" class="img" width="120" height="100">-->
			<div >
				
				<form method="POST" autocomplete="off">
                    <?php 
                    ?>
                    <h2 style="color:black;">Company Details</h2>
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
                      <input type="text" name="Shop_City" value="" placeholder="Location" style="padding:10px;" required> 
                    </div><br>
                
                    <div class="inputs">
                      <input type="text" name="Shop_Line" value="" placeholder="Shop's Line" style="padding:10px;" required>
                    </div><br>          
            </div>
             <div class="inputs">
                      <textarea name="Desc" id="Desc" cols="50" rows="5" placeholder="What offer do you render" required></textarea>
                    </div><br>
         <div class="inputs">
              <h6 style="color:#000 !important;">(optional)</h6>    
        </div>                

        
            <input type="checkbox" name="vehicle1" value="Bike"><h6 style="color:#000 !important;">Use my current location</h6>
            <input type="checkbox" name="vehicle2" value="Car"><h6 style="color:#000 !important;">I have a car </h6>
        </div>

        <div>

        </div>

              <div class="login_button Create_Acc" style="margin-bottom:75px; border-radius:10px">
              <input type="submit" value="Register">
              </div>
				</form>
      </div>

     <!--- <img src="pic/subscribe.png" alt="" width="150" style="margin-left:40%"><br><br><br><br>--->
     <section id="comic">
          </span>
              <img src="pic/provision.png" alt="">
            <span>
     </section>
     <section id="all_premium">
          
        <div class="About_me centter">
            <span>
                  <?php
                  $_SESSION['month3']='2850';
                  ?>
                  <h5 class="tag">3 Months</h5>
                  <h6 class="name">Advertise Your Product <br>
                  with our subcription</h6>

                  <img src="pic/3mnt.png" alt="">

                  <a href="3monthssubscription.php"><button>Subscribe 2850</button></a>
            </span>


            <span>

                 <?php
                   $_SESSION['month2']='1930';
                  ?>
                  <h5 class="tag" style="text-align:center">2 Months</h5>  
                  <h6 class="name">Advertise Your Product <br>
                  with our subcription</h6>
                  <img src="pic/2mnt.png" alt="">
                  <a href="2monthssubscription.php"><button>Subscribe 1930</button></a>
            </span>


            <span>
                 <?php
                  $_SESSION['month1']='1000';
                  ?>
                  <h5 class="tag">1 Month</h5>
                  <h6 class="name">Advertise Your Product <br>
                  with our subcription</h6>
                  <img src="pic/1mnt.png" alt="">
                  <a href="1monthssubscription.php"><button>Subscribe 1000</button></a>
            </span>

        </div>
        
    </section>
    <br><br><br>
    



      <?php
    for($t= date("s"); $t <=52; $t++){
        echo "<img src='pic/f".$t.".jpg' alt'Advert' width='60%' height='650' style=margin-left:20%;";
        echo $t;
    }

    echo date("s")
      
        ?>
      <br><br><br>
     <!--  <h5 style="margin-left:10%;">for more of your ankara styles, visit <?php header("location:Register.php")?>Awesome-wears </a> for more information</h5> -->
			<h3 class="password" style="color:black; !important,margin-left:15%;"><a href="Edit.php"><br><br><br><br>Change your account info </a></h3>
		</div>
  </section>
  
  <section class="advert">
      
  </section>

  
  <?php
    include('footer.php');
  ?>


  </div>

    <!-- Scripts -->

    


  <script>
    function toggleNav(){
      document.querySelector(".holla").classList.toggle("navbar--open");
    }
  </script>

  <script>     
        const paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener("submit", payWithPaystack, false);
        function payWithPaystack(e) {
                e.preventDefault();

            let handler = PaystackPop.setup({
              key: 'pk_test_0b4537f09ca0e3bef10015f41440b242d75757e9',// Replace with your public key
              email:"<?php echo $_SESSION['Email'] ?>",
              amount:1000,
              
              ShopName:"<?php echo $_SESSION['shop_name'] ?>",
              ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
              // label: "Optional string that replaces customer email"
              Username:"<?php echo $_SESSION['Username'] ?>",
              onClose: function(){
                alert('Window closed.');
              },
            callback: function(response){
                const referenced = response.reference;
                      window.location.href='payment.php?successfullypaid='+referenced;
              }
            });

            handler.openIframe();
          }
      </script>



      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>



      <script>
        function payWithPaystackssss(){
          var handler = PaystackPop.setup({
            key:'pk_test_0b4537f09ca0e3bef10015f41440b242d75757e9',
            email:'stephanyemmitty@gmail.com',
            amount:10000,
            currency:"NGN",
            ref:""+Math.floor((Math.random() * 1000000000)+1),
            metadata:{
              custom_fields:[
                {
                  display_name: "Mobile Number",
                  variable_name: "mobile_number",
                  value: "+2349075994830"
                }
              ]
            },

            callback:function(response){
              const referenced = response.reference;
            },
            onClose:function(){
              wiindow.location.href='success.php?successfullypaid='+referenced;
            }
          }),

          handler.openIframe();
          
        }
      </script>
</body>

<!-- Mirrored from www.hoschools.com/css/tryit.asp?filename=trycss_navbar_horizontal_responsive by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2017 05:38:36 GMT -->
</html>
