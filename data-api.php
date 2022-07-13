<?php 
   
   require "config.php";
   //Aquarium 1
   $nama			= $_GET["nama"];
   $latitude_data	    = $_GET["latitude"];
   $longitude_data     	= $_GET["longitude"];
   $speed_data     	    = $_GET["speed"];
   
   date_default_timezone_set('Asia/Jakarta');
   $time=date("Y-m-d G:i:s");
	
		//LOGIKA
		$latitudeVal = $longitudeVal = $speedVal = "";
		if ($latitude_data==0){
			$latitudeVal="latitude";
		}
		 if ($longitude_data==0){
			$longitudeVal="longitude";
		}
        if ($speed_data==0){
			$speedVal="speed";
		}

        if(isset($_GET['nama'])){
            $nama = $_GET['nama'];
        } 
		
		if($latitude_data>=26 && $latitude_data<=28 and $longitude_data>=36 && $longitude_data<=38 and
			$speed_data >=46 && $speed_data){
			$statusnya="layak kurban";
		}else{
			$statusnya="tidak layak kurban";
		}
		

		//UPDATE DATA REALTIME PADA TABEL tb_monitoring
		$updateRealtime      = "UPDATE monitoring SET 
					
					waktu		= '$time', 
                    latitude    = '$latitude_data',
					longitude	= '$longitude_data',
					speed		= '$speed_data',
					status	 	= '$statusnya' WHERE nama = '$nama'";

		$result = mysqli_query($db, $updateRealtime);
			
		//INSERT DATA REALTIME PADA TABEL tb_save  	
		$saveData = "INSERT INTO logdata SELECT * FROM monitoring WHERE nama= '$nama'";
		// "INSERT INTO logdata 
		// (waktu, amonia, nitrat, nitrit, statusnya)VALUES 
		// ('" . $time . "', 
		// '" . $data_amonia . "', '" . $data_nitrat . "', '" . $data_ph . "',
		// '" . $statusnya . "') WHERE nama =";

        $result = mysqli_query($db, $saveData);
				
		//MENJADIKAN JSON DATA
		//$response = query("SELECT * FROM monitoring")[0];
		// $response = query("SELECT * FROM monitoring")[0];
		// $result = json_encode($response);
    	// echo $result;
 ?>