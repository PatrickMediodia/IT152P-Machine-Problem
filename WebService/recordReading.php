<?php 

include_once('connects.php');
$temp = $_GET['temp'];
$hum = $_GET['hum'];

date_default_timezone_set('Asia/Manila');
$date = date('m/d/Y h:i a', time());

$query = "INSERT INTO temphumrecords(temperature, humidity, recordDateTime) VALUES($temp, $hum, '$date')";
$result = mysqli_query($con, $query);

if($result) {
    echo "Insert Successful\n";
    echo "{Temp: ", $temp, ", Hum: ", $hum, ", DateTime: ", $date, "}";
}
else {
    echo "Error, Insert not successful";
}

?>