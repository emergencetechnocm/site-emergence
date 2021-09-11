<?php

$servername = "localhost";

// REPLACE with your Database name
$dbname = "taro0941_tuto";
// REPLACE with Database user
$username = "taro0941_tuto";
// REPLACE with Database user password
$password = "virgile2020";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, latitude1, longitude2, vitesse3, reading_time FROM gps order by reading_time desc limit 40";

$result = $conn->query($sql);

while ($data = $result->fetch_assoc()){
    $sensor_data[] = $data;
}

$readings_time = array_column($sensor_data, 'reading_time');

// ******* Uncomment to convert readings time array to your timezone ********
/*$i = 0;
foreach ($readings_time as $reading){
    // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
    $readings_time[$i] = date("Y-m-d H:i:s", strtotime("$reading - 1 hours"));
    // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
    //$readings_time[$i] = date("Y-m-d H:i:s", strtotime("$reading + 4 hours"));
    $i += 1;
}*/

$latitude1 = json_encode(array_reverse(array_column($sensor_data, 'latitude1')), JSON_NUMERIC_CHECK);
$longitude2 = json_encode(array_reverse(array_column($sensor_data, 'longitude2')), JSON_NUMERIC_CHECK);
$vitesse3 = json_encode(array_reverse(array_column($sensor_data, 'vitesse3')), JSON_NUMERIC_CHECK);
$reading_time = json_encode(array_reverse($readings_time), JSON_NUMERIC_CHECK);

/*echo $value1;
echo $value2;
echo $value3;
echo $reading_time;*/

$result->free();
$conn->close();
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <style>
    body {
      min-width: 310px;
      max-width: 1280px;
      height: 500px;
      margin: 0 auto;
    }
    h2 {
      font-family: Arial;
      font-size: 2.5rem;
      text-align: center;
    }
  </style>
  <body>
    <h2>Géolocalisation</h2>
   <div id="chart-coordonnées" class="container">

<?php

 /*echo ' la latitude  :'.$latitude1.' l\'offre';
echo '  la longitude :'.$longitude2.'  l\'offre';
*/

// Selectionne les 5 premiers elements du tableau en commencant à l'index 0 (Qui est index du premier element du tableau)
//$interval = array_slice($sql, 0, 5);


$result = $conn->query($sql,0,5);

// afficher le resultat
print_r($result);


?>;

</div>
    

</body>
</html>