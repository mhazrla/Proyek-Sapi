<?php
require('config.php');

$query = "SELECT * FROM monitoring ORDER BY nama ASC";
$result = mysqli_query($db, $query);

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-danger elevation-4">
  <!-- Brand Logo -->
  <a href="http://localhost/Proyek-Sapi/index.php" class="brand-link">
    <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SAPI-GO</span>
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

            <?php foreach ($result as $data) : ?>
              <li class="nav-item">
                <a href="logData.php?nama=<?= $data['nama'] ?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?= $data['nama'] ?></p>
                </a>
              </li>

            <?php endforeach ?>

          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>