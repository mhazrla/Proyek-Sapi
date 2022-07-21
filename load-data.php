<?php
require('config.php');

$query = "SELECT * FROM monitoring ORDER BY nama ASC";
$result = mysqli_query($db, $query);

?>


<script>
  // Map initialization 

  var map = L.map('map').setView([-6.5925152, 106.7803399], 14);

  //osm layer
  var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://sv.ipb.ac.id/">SV IPB</a> | <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'

  });
  osm.addTo(map);

  var latlngs = [
     [-6.583468, 106.806213],
     [-6.588442, 106.805006],
     [-6.588875, 106.805933],
     [-6.589520, 106.805764],
 
];

    var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);
    

  <?php foreach ($result as $data) : ?>
    L.marker([<?= $data['latitude'] ?>, <?= $data['longitude'] ?>], 16).bindPopup('Nama&emsp;&emsp; &emsp;: <?= $data['nama'] ?> <br>' + 'Latitude  &emsp;&emsp;: <?= $data['latitude'] ?> <br>' + 'Longitude  &emsp; : <?= $data['longitude'] ?> <br>' + 'Kecepatan&emsp;: <?= $data['speed'] ?> <br>').addTo(map)

 
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