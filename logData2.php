<?php include 'templates/logData/header.php'?>
<?php include 'templates/sidebar.php' ?>
<?php include 'templates/navbar.php' ?>

<?php
  require('config.php');

  if(isset($_GET['nama'])){
    $nama = $_GET['nama'];
  } 

  // Fetch all data data from logdata table
  $query =  "SELECT * FROM logdata where nama='$nama' ORDER BY waktu DESC ";
  $result = mysqli_query($db, $query);
  $data = mysqli_fetch_array($result);

  $avgQuery = "SELECT AVG(speed) as avg FROM logdata where nama='$nama'";
  $avgResult = mysqli_query($db, $avgQuery);
  $avgData = mysqli_fetch_array($avgResult);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Log Data <?= $data['nama'] ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Log Data Alat 1</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

              <div class="card">
              <div class="card-header">
                
                <!-- Card-box -->
                <div class="row">
                  <div class="col-lg-3 col-12">
                    <!-- small box -->
                    <div class="small-box bg-info row p-2">
                      <div class="inner col-9">
                        <h5>Cari statistik</h5>
                        <div class="input-group">
                          <input type="date" name="waktu" id="" class="form-control">
                          <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                      </div>
                      <div class="icon">
                        <i class="fas fa-solid fa-magnifying-glass"></i>
                      </div>
                    </div>
                  </div>
                  <!-- ./col -->
                  <!-- ./col -->
                  <div class="col-lg-3 col-0"></div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-0"></div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-12">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3><?= $avgData['avg'] ?><low style="font-size: 20px"> m/s</l></h3>

                        <p >Rata-rata kecepatan</p>
                        <small><em>*data dihitung berdasarkan banyaknya data pada tabel di bawah</em></small>
                      </div>
                      <div class="icon">
                        <i class="fas fa-project-diagram"></i>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- Card Box  -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a class="btn btn-danger mb-4 me-3 px-4 rounded-pill" href="delete.php?nama=<?=$data['nama']?>" onclick="return confirm('Yakin ingin menghapus data?')">
                  <i class="fas fa-trash-alt"></i>  
                  <span>Clear</span>
                </a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Waktu</th>
                      <th>Latitude</th>
                      <th>Longitude</th>
                      <th>Kecepatan (m/s)</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                      foreach ($result as $data) : ?>

                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data['waktu'] ?></td>
                      <td><?= $data['latitude'] ?></td>
                      <td><?= $data['longitude'] ?></td>
                      <td><?= $data['speed'] ?></td>
                      <td><?= $data['status'] ?></td>
                    </tr>

                    <?php endforeach; ?>

                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<?php include ('templates/logData/footer.php') ?>
