<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Sapi Finder</title>
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <script>
    "https://unpkg.com/jquery@3.3.1/dist/jquery.js"
  </script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

</head>

<body class="d-flex flex-column min-vh-100">
  <div class="screen-cover d-none d-xl-none"></div>

  <div class="container" style="height: 100%;">
    <div class="row ms-5 my-4">
      <div class="col">
        <div class="container">
          <h2 class="mt-3 mb-5 fw-bold" style="color: #343A40;"></h2>
          <div class="card p-5 rounded-5 border-0" style="background-color: #F8F9FA;">
            <div class="row mb-3">
              <div class="col">
                <h6 class="text-muted"><span class="fw-bold">Update time : </h6>
              </div>

              <div class="col-md-4 col-lg-4">
                <div class="row">
                  <h6 class="col-10 text-muted"><span class="fw-bold">Status : </h6>
                  <div class="col">
                    <span class="position-absolute p-2 bg-success border border-light rounded-circle"></span>
                    <span class="position-absolute p-2 bg-danger border border-light rounded-circle"></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row align-items-center row-cols-3">
              <div id="map" style="width:100%;height:400px;"></div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</body>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
  // Map initialization 
  var map = L.map('map').setView([14.0860746, 100.608406], 6);

  //osm layer
  var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  });
  osm.addTo(map);

  if (!navigator.geolocation) {
    console.log("Your browser doesn't support geolocation feature!")
  } else {
    setInterval(() => {
      navigator.geolocation.getCurrentPosition(getPosition)
    }, 5000);
  }

  var marker, circle;

  function getPosition(position) {
    // console.log(position)
    var lat = position.coords.latitude
    var long = position.coords.longitude
    var accuracy = position.coords.accuracy

    if (marker) {
      map.removeLayer(marker)
    }

    if (circle) {
      map.removeLayer(circle)
    }

    marker = L.marker([lat, long])
    circle = L.circle([lat, long], {
      radius: accuracy
    })

    var featureGroup = L.featureGroup([marker, circle]).addTo(map)

    map.fitBounds(featureGroup.getBounds())

    console.log("Your coordinate is: Lat: " + lat + " Long: " + long + " Accuracy: " + accuracy)
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>