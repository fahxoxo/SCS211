<?php
$lastest = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"),true);
$people = $lastest["people"];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
  </head>
  <body>

<section class="bg-light py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="mb-4 display-5 text-center">Our Team</h2>
          <p class="text-secondary mb-5 text-center lead fs-4">We are a group of innovative, experienced, and proficient teams. You will love to collaborate with us.</p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>
  
    <div class="container overflow-hidden">
      <div class="row gy-4 gy-lg-0 gx-xxl-5">
      <?php foreach ($people as $row) { ?>
        <div style="margin-bottom: 30px;"  class="col-12 col-md-6 col-lg-3">
          <div  class="card border-0 border-bottom border-primary shadow-md overflow-hidden">
            <div style="height: 400px; " class="card-body p-0">
              <figure class="m-0 p-0">
              <div style="margin-top:20px;" class="d-flex justify-content-center">
              <img  style="height: 100px; width: 100px;  border-radius:100%; box-shadow: 0 8px 8px rgba(0,0,0,0.25) " src="<?= $row['image'] ?>" alt="Staff 1 ">
              </div>
              <div class="d-flex justify-content-center">
                <figcaption class="m-0 p-4">
                <h4 style="text-align: center;" ><?= $row['name'] ?></h4>
                <div style="font-size: 15px; margin-top: 20px;">
                <p><i class="fa fa-graduation-cap" style="font-size:17px; margin-right: 3px;"></i><?= $row['education'] ?></p>
                <p><i class="fa fa-user" style="font-size:20px; margin-right: 3px;"></i><?= $row['role'] ?></p>
                <p> <i class="fa fa-envelope" style="font-size:14px; margin-right: 3px;"></i><?= $row['email'] ?></p>
                <p><i class="fa fa-phone" style="font-size:24px; margin-right: 3px;"></i> <?= $row['phone'] ?></p>
                </div>

                </figcaption>
                </div>
                
              </figure>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>