<?php
$mysqli=mysqli_connect('localhost','root','','market');
$user_id = $_SESSION['user_info_id'];
$sql="SELECT username,firstname,email,phone,shop_name,bustop,junction,shop_line,more,City FROM users WHERE id='$user_id'";

$run=mysqli_query($mysqli,$sql);
$queryRun = mysqli_num_rows($run);

while($row = mysqli_fetch_assoc($run)) {

    $_SESSION['username']       =       $row["username"];
    $_SESSION['firstname']      =       $row["firstname"];
    $_SESSION['email']          =       $row["email"];
    $_SESSION['phone']          =       $row["phone"];
    $_SESSION['shop_names']      =       $row["shop_name"];
    $_SESSION['bustop']         =       $row["bustop"];
    $_SESSION['junction']       =       $row["junction"];
    $_SESSION['shop_lines']       =      $row["shop_line"];
    $_SESSION['desc']           =       $row["more"];
    $_SESSION['city']           =       $row["City"];
}
/*echo $_SESSION['username'];
echo $_SESSION['shop_name'];
echo $_SESSION['email'] ;
echo $_SESSION['phone'];
echo $_SESSION['bustop']  ;
echo $_SESSION['junction'] ;
echo $_SESSION['desc']; 
echo $_SESSION['city']; 
*/
$email = $_SESSION['email'];
$splitedEmail= explode('.',$email);
$forEachPic= $splitedEmail[0];
$_SESSION['emailName']=($forEachPic);

$sql="SELECT my_pic FROM users Where id='$user_id'";
$rub_sql=$mysqli->query($sql);
$result=mysqli_fetch_array($rub_sql,MYSQLI_ASSOC);
if($result){
    $_SESSION['profilePic_Location']=  $result['my_pic'];
    $_SESSION['profilePic_Location'];
}

//echo $_SESSION['emailName'];
$profilePic = $_SESSION['emailName'].'png';

$splitedEmail= explode('.',$email);
$forEachPic= $splitedEmail[0];

$_SESSION['splitedEmail']=$forEachPic;
?>