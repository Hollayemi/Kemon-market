<?php
include("header.php");
$mysqli=mysqli_connect('localhost','root','','market');
/*
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

*/


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
<section style="text-align:center; ">
  <br><br>

        <h5 style="font-size: medium;">Dear <?php echo $username?>, you are about to make a month subscription for
         <?php echo $shop?> in 
         <?php echo $city?> which will cost you <?php echo $_SESSION['month3']?></h5>

         <br>
         
         <a href="3month.php"><button>Continue</button></a>

</section>


</body>
</html>