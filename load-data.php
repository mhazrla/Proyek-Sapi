<?php
require ('config.php');

$query = "SELECT * FROM monitoring ORDER BY nama ASC";
$result = mysqli_query($db, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>
    
        <div class="container" style="height: 100%;">
            <div class="row ms-5 my-4">
                <div class="col">
                <?php 
                  foreach ($result as $data) {
          
                  ?>
                    <div class="container">
                      <h2 class="mt-3 mb-5 fw-bold" style="color: #343A40;"><?=$data['nama']?></h2>
                      <div class="card p-5 rounded-5 border-0"  style="background-color: #F8F9FA;" >
                        <div class="row mb-3">
                          <div class="col">
                            <h6 class="text-muted"><span class="fw-bold">Update time : </span><?=$data["waktu"];?></h6>
                          </div>
                              
                          <div class="col-md-4 col-lg-4">
                            <div class="row">
                              <h6 class="col-10 text-muted"><span class="fw-bold">Status : </span><?=$data["status"];?></h6> 
                              <div class="col">
                                <?php if($data["status"] == "KUALITAS AIR TERJAGA!") : ?>
                                  <span class="position-absolute p-2 bg-success border border-light rounded-circle"></span>
                                <?php elseif($data["status"] == "KUALITAS AIR BURUK, SEGERA GANTI AIR DI AQUASCAPE") : ?>
                                  <span class="position-absolute p-2 bg-danger border border-light rounded-circle"></span>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row align-items-center row-cols-3">
                          <div id="googleMap" style="width:100%;height:400px;"></div>
                            <script>
                                function myMap() {
                                var mapProp= {
                                  center:new google.maps.LatLng(51.508742,-0.120850),
                                  zoom:5,
                                };
                                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                                }
                                </script>

                                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

                            
                        </div>
                      </div>

                      <?php }?>
                      
                      </div>
                    </div>
                </div>
          </div>

</body>
