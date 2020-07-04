<?php
require_once('geoplugin.class.php');

    $geoplugin = new geoPlugin();

    $geoplugin->locate();

        $_SESSION['geoplugin_ip']                =           $geoplugin->ip;
        $_SESSION['geoplugin_city']              =           $geoplugin->city;
        $_SESSION['geoplugin_region']            =           $geoplugin->region;
        $_SESSION['geoplugin_regionName']        =           $geoplugin->regionName;
        $_SESSION['geoplugin_countryName']       =           $geoplugin->countryName;
        $_SESSION['geoplugin_countryCode']       =           $geoplugin->countryCode;
        $_SESSION['geoplugin_latitude']          =           $geoplugin->latitude;
        $_SESSION['geoplugin_longitude']         =           $geoplugin->longitude;
        $_SESSION['geoplugin_timezone']          =           $geoplugin->timezone;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"type="" href="pic/kemon.png" style="width: 150px;">
    <link rel="stylesheet" href="index.css">
    <title>Kemon</title>
</head>
<body>

    <section>
        <div  class="btn">
            
            <div class="button btn_Customer">

                <a href="Request.php">Buy From The Nearest Shop</a></button>

            </div>

            <div class="button btn_Business"> 

                 <a href="login_form.php">Register Your Shop</a>
            </div>

        </div>

        <div>
            <h6 class="p_policy"><a href="#">Private policy</a></h6>
        </div>
    </section>
    
</body>
</html>