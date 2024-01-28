<!DOCTYPE html>
<html lang="en">

<head>
    <title>หลักสูตรวิทยาการคอมพิวเตอร์</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="http://cs.vru.ac.th" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ " />
    <meta property="og:description" content="หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ " />
    <meta property="og:image" content="http://cs.vru.ac.th/images/logo5.png" />
    <?php include("layouts/cs-css.php") ?>
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
                <img class="m-4" src="http://cs.vru.ac.th/images/css.png" height="70">
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
    </div>
<!--head--><?php include("layouts/cs-header.php") ?>
    <!-- start of content , see end in footer -->
    <div class="content">
        <div class="container">
            <br />
            <h2>&starf;&nbsp;ติดต่อเรา</h2>
            <hr>

            <style>
                #map_container {
                    height: 250px;
                    margin-bottom: 10px;
                }

                #map {
                    width: 100%;
                    height: 100%;
                }
            </style>
            <div id="map_container">
                <div id="map"></div>
            </div>
            <script>
                var map;

                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: 14.132371,
                            lng: 100.616594
                        },
                        zoom: 15
                    });
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(14.132371, 100.616594),
                        map: map,
                        title: 'หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ฯ'
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoZlRLPlMJTXe38xtlDFiyI9rj6BoG10M&callback=initMap" async defer></script>

            <p></p>
            <h4>หลักสูตรวิทยาการคอมพิวเตอร์</h4>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;อาคาร 75 ปี วไลยอลงกรณ์ </p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;เลขที่ 1 หมู่ 20 ถนนพหลโยธิน กม. 48 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 13180</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;โทรศัพท์ 0-2529-0674-7 ต่อ 365 โทรสาร 02-909-3029</p>
            &nbsp; &nbsp; &nbsp; &nbsp;<a href="https://www.facebook.com/profile.php?id=100008113098809&fref=ts"><img src="http://cs.vru.ac.th/images/facebook-icon-preview-1.png" width="50" height="50"> FACEBOOK หลักสูตรวิทยาการคอมพิวเตอร์</a>
        </div>
    </div>
    <!-- end of content, see start in header -->
<!--footer--><?php include("layouts/cs-footer.php") ?>
<?php include("layouts/cs-script.php") ?>

</body>

</html>