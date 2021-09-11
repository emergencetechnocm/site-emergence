<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'taro0941_tuto';
	$pass = 'virgile2020';
	$db = 'taro0941_tuto';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

 	$coordinates = array();
 	$latitudes = array();
 	$longitudes = array();

	// Select all the rows in the markers table
	//$query = "SELECT  `latitude1`, `longitude2` FROM `gps` "

	//afficher un intervale de valeur de la base de données:ici j'affiche les 100 dernières valeurs de la base de données 

	$query= "SELECT latitude1, longitude2,reading_time FROM gps order by reading_time desc limit 100";


	$result = $mysqli->query($query) or die('data2selection for google map failed: ' . $mysqli->error);

 	//while ($row = mysqli_fetch_array($result)) {

	//	$latitudes[] = $row['latitude1'];
	//	$longitudes[] = $row['longitude2'];
	//	$coordinates[] = 'new google.maps.LatLng(' . $row['latitude1'] .','. $row['longitude2'] .'),';
	//}

while ($row = mysqli_fetch_array($result)) {
	if ($row['latitude1'] != 0.000000 || $row['longitude2'] != 0.000000){

		$latitudes[] = $row['latitude1'];
		$longitudes[] = $row['longitude2'];
		$coordinates[] = 'new google.maps.LatLng(' . $row['latitude1'] .','. $row['longitude2'] .'),';
		}

	}


	//remove the comaa ',' from last coordinate
	$lastcount = count($coordinates)-1;
	$coordinates[$lastcount] = trim($coordinates[$lastcount], ",");	
?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Map | View</title>
	</head>

	<body>
	    <!-- <nav style="color: white;">  
			<ul> 
				<li class="active"><a href="#"><img src="img/cameroun.jpg" style="height:5%;"></a></li>
				<li><a href="#"><img src="img/vehicule.png"></a></li>
				<li><a href="#"><img src="img/vehicule.png"></a></li>
				<li><a href="#"><img src="img/vehicule.png"></a></li>
			</ul> 
		</nav> -->

		 <div class="outer-scontainer">
	        <div class="row">
	            <form class="form-horizontal" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
	            	<div class="form-area">	      
    					<button type="submit" id="submit" name="import" class="btn-submit">recharger les coordonnées</button><br />
					</div>
	            </form>
	        </div>

		<div id="map" style="width: 100%; height: 90vh;"></div>

		<script>
			function initMap() {
			  var mapOptions = {
			    zoom: 18,
			    center: {<?php echo'lat:'. $latitudes[0] .', lng:'. $longitudes[0] ;?>}, //{lat: --- , lng: ....}
			    mapTypeId: google.maps.MapTypeId.SATELITE
			  };

			  var map = new google.maps.Map(document.getElementById('map'),mapOptions);

			  var RouteCoordinates = [
			  	<?php
			  		$i = 0;
					while ($i < count($coordinates)) {
						echo $coordinates[$i];
						$i++;
					}
			  	?>
			  ];

			  var RoutePath = new google.maps.Polyline({
			    path: RouteCoordinates,
			    geodesic: true,
			    //strokeColor: '#1100FF',
			     strokeColor: '#9EFD38',
			    strokeOpacity: 1.0,
			    strokeWeight: 10
			  });

			  mark = 'img/mark.png';
			 flag = 'img/flag.png';

			   //mark = 'img/rouge.png';
			  // flag = 'img/depart.png';

			  startPoint = {<?php echo'lat:'. $latitudes[0] .', lng:'. $longitudes[0] ;?>};
			  endPoint = {<?php echo'lat:'.$latitudes[$lastcount] .', lng:'. $longitudes[$lastcount] ;?>};

			  var marker = new google.maps.Marker({
			  	position: startPoint,
			  	map: map,
			  	icon: mark,
			  	//icon: flag,
			  	title:"Start point!",
			  	animation: google.maps.Animation.BOUNCE
			  	//animation: google.maps.Animation.DROP
			  });

			  var marker = new google.maps.Marker({
			  position: endPoint,
			   map: map,
			   //icon: mark,
			   icon: flag,
			   title:"End point!",
			   animation: google.maps.Animation.DROP
			   //animation: google.maps.Animation.BOUNCE
			});

			  RoutePath.setMap(map);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
    	</script>

    	<!--remenber to put your google map key-->
	   
	    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap"></script>

	</body>
</html>