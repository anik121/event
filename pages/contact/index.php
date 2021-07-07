<?php $base_url= "http://localhost/Project/static/event/"?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Contact Us</title>
 
    <?php include('../../components/JsAndCss/allCss.php')?>

</head>

<body>
    <?php include('../home/appHeader.php')?>

    <?php include('./header.php')?>
    <!-- /.page header -->

    <?php include('./main-content.php')?>
    <!-- /.page Main Content -->

    <div class="map" id="googleMap"></div>
    <!-- /.page Map -->

    <?php include('../home/appFooter.php')?>
    <!-- /.page Footer -->
    
    <?php include('../../components/JsAndCss/allJs.php')?>
    <!-- /.page All Script -->

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
    var myCenter = new google.maps.LatLng(23.0203458, 72.5797426);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 9,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,

            icon: 'images/pinkball.png'
        });

        marker.setMap(map);
        var infowindow = new google.maps.InfoWindow({
            content: "Hello Address"
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>

</html>
