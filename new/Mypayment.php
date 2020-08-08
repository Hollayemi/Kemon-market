<?php
$mysqli=mysqli_connect('localhost','root','','market');

$amount = 2500;

 $sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 
  $Shop_Name     =  $mysqli->real_escape_string($_POST['Shop_Name']);
  $Junction      =  $mysqli->real_escape_string($_POST['Junction']);
  $Bustop        =  $mysqli->real_escape_string($_POST['Bustop']);
  $City          =  $mysqli->real_escape_string($_POST['Shop_City']);
  $Shop_Line     =  $mysqli->real_escape_string($_POST['Shop_Line']);
  $Desc          =  $mysqli->real_escape_string($_POST['Desc']);

if(empty($Shop_Name) || empty($Bustop) || empty($City) || empty($Shop_Line)  || empty($Desc)){
  header("Location:index.php");
}else{
 session_start();
  $_SESSION['shop_name']  =$Shop_Name;
  $_SESSION['junction']   =$Junction;
  $_SESSION['bustop']     =$Bustop;
  $_SESSION['city']       =$City;
  $_SESSION['shop_line']  =$Shop_Line;
  $_SESSION['desc']       =$Desc;
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paystack pay page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Hi, <?php echo $_SESSION['email']; ?></h2>
<form action="" method="POST">
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button name="sub" type="button" onclick="payPageWithPaystack()"> Proceed </button> 
</form>
 <?php
 $first_name = $_SESSION['firstname']
 ?>
<script>
  function payPageWithPaystack(){
const api = "pk_test_0b4537f09ca0e3bef10015f41440b242d75757e9";
    var handler = PaystackPop.setup({
      key: api,
      email: "<?php echo $_SESSION['email']; ?>",
      amount: <?php echo $amount*100; ?>,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      firstname: "<?php echo". $first_name."; ?>",
      shopname: "<?php echo $_SESSION['shop_name']; ?>",
      phone: "<?php echo $_SESSION['phone']; ?>",
      // label: "Optional string that replaces customer email"
      metadata: {
         custom_fields: [
            {
                display_name: "Shop Name:",
                variable_name: "Shop_Name",
                value: "<?php echo  $_SESSION['shop_name']; ?>"
            },
             {
                display_name: "Shop Line:",
                variable_name: "Shop_Line",
                value: "<?php echo  $_SESSION['shop_line']; ?>"
            },
             {
                display_name: "Phone Number:",
                variable_name: "phone_number",
                value: "<?php echo $_SESSION['phone']; ?>"
            },
             {
                display_name: "City",
                variable_name: "Shop_City",
                value: "<?php echo  $_SESSION['city']; ?>"
            }
         ]
      },
      callback: function(response){
           const referenced = response.reference;
		  window.location.href='done.php?successfullypaid='+ referenced;
        
      },
      onClose: function(){
          alert('window closed');

          
      }
    });
    handler.openIframe();
  }
</script>
</body>
</html>