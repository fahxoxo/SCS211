<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>มูลนิธิศูนย์เกิดใหม่ (หญิง) REBIRTH CENTER FOUNDETION</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="Free HTML Templates" name="keywords">
   <meta content="Free HTML Templates" name="description">
   <!-- Favicon -->
   <link href="img/favicon.ico" rel="icon">
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
   <link rel="shortcut icon" href="/favicon.ico">
   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400&display=swap" rel="stylesheet">
   <!-- Icon Font Stylesheet -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
   <!-- Libraries Stylesheet -->
   <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
   <!-- Customized Bootstrap Stylesheet -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Template Stylesheet -->
   <link href="css/style.css" rel="stylesheet">
   <style>
      .glasses .glasses_box {
         text-align: center;
         border: #555556 solid 1px;
         border-radius: 2px;
         padding: 10px 10px 10px 10px;
         margin-bottom: 20px;
      }
   </style>
</head>

<body>

   <?php include("nav.php"); ?>

   <!--content-->
   <div class="glasses">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="titlepage">
                  <h2>Our Glasses</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor
                     e et dolore magna aliqua. Ut enim ad minim veniam, qui
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <?php
         $json_url = "https://raw.githubusercontent.com/fahxoxo/SCS211/main/week12/json/data1.json";
         $json = file_get_contents($json_url);
         $data = json_decode($json, true);

         // แบ่งข้อมูลเป็นกลุ่มของรูปภาพตาม row ที่มี 4 รูปภาพในแต่ละ row
         $rows = array_chunk($data['people'], 4);

         foreach ($rows as $row) {
            echo '<div class="row">';
            foreach ($row as $person) {
               echo '<div class="col-md-3">';
               echo '<img src="' . $person['image'] . '" class="img-fluid">';
               echo '</div>';
            }
            echo '</div>';
         }
         ?>
      </div>

      <!--div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass1.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass2.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass3.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass4.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass5.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass6.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass7.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass8.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="index.php">หน้าหลัก</a>
               </div>
            </div>
         </div-->
   </div>
   <!--content end-->
   <?php include("footer.php"); ?>


</body>

</html>