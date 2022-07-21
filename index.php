<?php include 'templates/header.php' ?>
<?php include 'templates/sidebar.php' ?>
<?php include 'templates/navbar.php' ?>

<?php
require('config.php');

$queryUT = "SELECT MAX(waktu) AS time FROM monitoring";
$resultUT = mysqli_query($db, $queryUT);
$dataUT = mysqli_fetch_array($resultUT);
?>

<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <h3 class="m-0 pt-2"> Monitoring</h3>

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6 mb-3 mt-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#tambahData" aria-expanded="false" aria-controls="tambahData"><i class="fas fa-plus">
            </i>&emsp;Tambah alat</button>

        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6"></div>
        <!-- ./col -->
        <div class="col-lg-3 col-6"></div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-transparent collapse mt-3" id="tambahData">
            <div class="inner">
              <form action="tambah.php" method="POST">
                <div class="row">
                  <div class="col-8 col-4">
                    <input class=" form-control border-end-0 border rounded-pill rounded-pill" type="text" placeholder="Masukkan nama..." name="nama">
                  </div>
                  <div class="col-2 col-2">
                    <button type="submit" class="btn btn-primary rounded-4 border-0" style="background-color: #2196F3;" name="tambah">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
        <section class="col-lg connectedSortable">
          <div class="card">
            <div class="card-footer">
              <h3 class="card-title">
                <i class="fas fa-calendar-alt mr-1"></i>
                <strong>Update Time : </strong> <?= $dataUT['time'] ?>
              </h3>
            </div>

            <div class="card-body">
              <div id="map" style="width:100%;height:600px;">
              <div class="load-data"></div>
            </div>

            </div>
          </div>
        </section>

      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php include 'templates/footer.php' ?>