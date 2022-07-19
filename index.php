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
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Monitoring</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Monitoring</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6 mb-3">
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
          <div class="small-box bg-transparent collapse" id="tambahData">
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

        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-footer">
              <h3 class="card-title">
                <i class="fas fa-calendar-alt mr-1"></i>
                <strong>Update Time : </strong> <?= $dataUT['time'] ?>
              </h3>
            </div><!-- /.card-header -->
            <div class="load-data"></div>
          </div>
        </section>
        <!-- /.Left col -->

      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php include 'templates/footer.php' ?>