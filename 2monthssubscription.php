<?php
include("header.php");
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
<h5 style="font-size: medium;">>Dear <?php echo $username?>, you are about to make 2 months subscription for
         <?php echo $shop?> in 
         <?php echo $city?> which will cost you <?php echo $_SESSION['month2']?></h5>

         <br>
         
         <a href="#"><button>Continue</button></a>

</section>


</body>
</html>