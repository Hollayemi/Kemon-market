<?php
  include('regNav.php');
  include('header.php');
  ?>
  <div class="reg_form">

  
  <section id="Registration_all" style="align-items:center;">
		<div class="Registration">	
			<!---<img src="pic/b.png" class="img" width="120" height="100">-->
			<div >
            
      <form action="Mypayment.php" method="POST" autocomplete='off' enctype="multipart/form-data">
                  
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
                      <input type="file" name="file" style="padding:10px;" required> 
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
        <div>

        </div>

              <div class="login_button Create_Acc" style="margin-bottom:75px; border-radius:10px">
              <button type="submit" name="submit">pay</button>
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
                  $_SESSION['1year']='2850';
                  
                  ?>
                  <h5 class="tag">1 Year</h5>
                  <h6 class="name">Advertise Your Product <br>
                  with our subcription</h6>

                  <img src="pic/3mnt.png" alt="">

                  <a href="3monthssubscription.php"><button>Subscribe 2850</button></a>
            </span>


            <span>

                 <?php
                   $_SESSION['month6']='1930';
                  ?>
                  <h5 class="tag" style="text-align:center">6 Months</h5>  
                  <h6 class="name">Advertise Your Product <br>
                  with our subcription</h6>
                  <img src="pic/2mnt.png" alt="">
                  <a href="2monthssubscription.php"><button>Subscribe 1930</button></a>
            </span>


            <span>
                 <?php
                  $_SESSION['month3']='1000';
                  ?>
                  <h5 class="tag">3 Months</h5>
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



      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>



</body>

<!-- Mirrored from www.hoschools.com/css/tryit.asp?filename=trycss_navbar_horizontal_responsive by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2017 05:38:36 GMT -->
</html>
