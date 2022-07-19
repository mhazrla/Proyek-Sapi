<?php
require('config.php');

$query = "SELECT * FROM monitoring ORDER BY nama ASC";
$result = mysqli_query($db, $query);

?>

<footer class="main-footer">
  <strong>Copyright &copy; 2022</strong> || Created by <strong> Project Mahasiswa || SV IPB.</strong>
  All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>
<script>
  $(document).ready(function() {
    $('.header').load('header.php');
    setInterval(() => {
      $('.load-data').load('load-data.php');
    }, 2000)
  });
</script>

</body>

<script>
  // Map initialization 

  var map = L.map('map').setView([-6.5925152, 106.7803399], 14);

  //osm layer
  var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://sv.ipb.ac.id/">SV IPB</a> | <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'

  });
  osm.addTo(map);


  <?php foreach ($result as $data) : ?>
    L.marker([<?= $data['latitude'] ?>, <?= $data['longitude'] ?>], 14).bindPopup('Nama&emsp;&emsp; &emsp;: <?= $data['nama'] ?> <br>' + 'Latitude  &emsp;&emsp;: <?= $data['latitude'] ?> <br>' + 'Longitude  &emsp; : <?= $data['longitude'] ?> <br>' + 'Kecepatan&emsp;: <?= $data['speed'] ?> <br>').addTo(map)

    circle = new L.circle(
      [<?= $data['latitude'] ?>, <?= $data['longitude'] ?>], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 30
      }).addTo(map)

  <?php endforeach ?>


  // if(!navigator.geolocation) {
  //     console.log("Your browser doesn't support geolocation feature!")
  // } else {
  //     setInterval(() => {
  //         navigator.geolocation.getCurrentPosition(getPosition)
  //     }, 5000);
  // }



  // function getPosition(position){
  //     // console.log(position)
  //     var lat = position.coords.latitude
  //     var long = position.coords.longitude
  //     var accuracy = position.coords.accuracy

  //     if(marker) {
  //         map.removeLayer(marker)
  //     }

  //     if(circle) {
  //         map.removeLayer(circle)
  //     }

  //     var featureGroup = L.featureGroup([marker, circle]).addTo(map)

  //     map.fitBounds(featureGroup.getBounds())

  //     console.log("Your coordinate is: Lat: "+ lat +" Long: "+ long+ " Accuracy: "+ accuracy)
  // }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>