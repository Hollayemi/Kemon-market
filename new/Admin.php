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
  <link rel="shortcut icon"type="" href="pic/kemon.png">
  <link rel="shortcut icon"type="" href="pic/kemon.png" style="width: 150px;">
  <link rel="stylesheet" type="" href="C:\Users\owner\Documents\st. html\bootstrap-4.3.1-dist">
  <script type="text/javascript"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color: #FFF">
<div class="col">
</div>
  <section id="Registration_all" style="align-items:center;">
		<div class="Registration">	
			<!---<img src="pic/b.png" class="img" width="120" height="100">-->
			<div >
            <form method="POST" autocomplete="off" >
            <fieldset class="display_forms">

                    <h2 style="color:black;">Search by city</h2>
                    <div class="inputs">
                      <input type="text" name="Search_City" value="" placeholder="City" style="padding:10px;" required> 
                    </div>
                    

                    
                   </div>             
              <div class="login_button Create_Acc">
                <input type="submit" value="Search">
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
    <th>id</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Shop Name</th>
    <th>Bustop</th>
    <th>Junction</th>		
    <th>Description</th>
    <th>Location</th>
    <th>Function</th>
  </tr>


<?php
    $mysqli=mysqli_connect('localhost','root','','market');

    $sql="SELECT id,email,phone,shop_name,bustop,junction,more,City FROM users";

    $run=mysqli_query($mysqli,$sql);

    function Delete($id) {
        $sql="DELETE * FROM users WHERE id='$id'";
        mysqli_query($mysqli,$sql);
    }

    while($row = mysqli_fetch_assoc($run)) {
        $shop_name      =       $row["shop_name"];
        $junction       =       $row["junction"];
        $bustop         =       $row["bustop"];
        $desc           =       $row["more"];
        $id             =       $row["id"];
        $Phone          =       $row["phone"];
        $Email          =       $row["email"];
        $desc           =       $row["more"];
        $City           =       $row["City"];
   
?>


    <tr>
        <td><?php echo $id ?> </td>
        <td><?php echo $Email ?> </td>
        <td><?php echo $Phone ?> </td>
        <td><?php echo $shop_name ?> </td>
        <td><?php echo $bustop ?> </td>
        <td><?php echo $junction ?> </td>		
        <td><?php echo $desc ?></td>
        <td><?php echo $City ?> </td>
        <td><button value="Delete" onkeypress='Delete($id)'style="background-color:#4d0000; height:30px;" >Delete</button></td>
        
    </tr>
  
    
<?php 

    
}
     


?>

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
