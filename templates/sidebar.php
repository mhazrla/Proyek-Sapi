<?php 

  require('config.php');

  if(isset($_GET['nama'])){
    $nama = $_GET['nama'];
  } 

  // Fetch all data data from logdata table
  $query =  "SELECT * FROM monitoring";
  $result = mysqli_query($db, $query);
  $data = mysqli_fetch_array($result);


?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Project Sapi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon classwith font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-solid fa-search-location"></i>
              <p>
                Tracking
              </p>
            </a>
          </li>
          <li class="nav-header">REPORT</li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Log Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?php while($listData = mysqli_fetch_array($result)) : ?>
              <li class="nav-item">
                <a href="logData2.php?nama=<?= $listData['nama'] ?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?= $listData['nama'] ?></p>
                </a>
              </li>
              <?php endwhile; ?>
              
            </ul>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
