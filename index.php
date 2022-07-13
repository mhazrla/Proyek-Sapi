<?php include 'templates/header.php' ?>
<?php include 'templates/sidebar.php' ?>
<?php include 'templates/navbar.php' ?>

<?php
  require ('config.php');

  $query = "SELECT * FROM monitoring ORDER BY nama ASC";
  $result = mysqli_query($db, $query);
  $data = mysqli_fetch_array($result);

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
                <button type="button" class="btn btn-primary" data-bs-toggle="collapse" 
                data-bs-target="#tambahData" aria-expanded="false" 
                aria-controls="tambahData"><i class="fas fa-plus">
                </i>Tambah alat</button>
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
                            <input class=" form-control border-end-0 border rounded-pill rounded-pill" type="text" placeholder="Masukkan nama..."  name="nama"> 
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
          <section class="col-lg-10 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-footer">
                <h3 class="card-title">
                  <i class="fas fa-calendar-alt mr-1"></i>
                  <strong>Update Time : </strong> <?= $dataUT['time'] ?> 
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div id="map" style="width:100%;height:600px;"></div>
              </div>
            </div>
          </section>
          <!-- /.Left col -->

          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-2 connectedSortable">
            <!-- Map card -->
            <div class="card bg-gradient-primary h-75">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php include 'templates/footer.php' ?>