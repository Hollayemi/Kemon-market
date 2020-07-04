<?php
require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();

$geoplugin->locate();

	echo "Geolocation results for {$geoplugin->ip}: <br />\n".
	"City: {$geoplugin->city} <br />\n".
	"Region: {$geoplugin->region} <br />\n".
	"Region Code: {$geoplugin->regionCode} <br />\n".
	"Region Name: {$geoplugin->regionName} <br />\n".
	"Country Name: {$geoplugin->countryName} <br />\n".
	"Country Code: {$geoplugin->countryCode} <br />\n".
	"Latitude: {$geoplugin->latitude} <br />\n".
	"Longitude: {$geoplugin->longitude} <br />\n".
	"Timezone: {$geoplugin->timezone} <br />\n";
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