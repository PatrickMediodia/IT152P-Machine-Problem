<?php 

include_once('connects.php');

//get temp and hum from URL
$temp = $_GET['temp'];
$hum = $_GET['hum'];

//get date of server
date_default_timezone_set('Asia/Manila');
$date = date('m/d/Y h:i a', time());

//get desired temp
$query = "SELECT desiredTemp FROM temperature";
$data =  mysqli_query($con, $query);
$row = mysqli_fetch_assoc($data); 
$desiredTemp = $row['desiredTemp'];

//insert new record
$insert = "INSERT INTO temphumrecords(temperature, desiredTemp, humidity, recordDateTime) VALUES($temp, $desiredTemp, $hum, '$date')";
$result = mysqli_query($con, $insert);

//check if successful
if($result) {
    echo "Insert Successful\n";
    echo "{Temp: ", $temp, ", Hum: ", $hum, ", DateTime: ", $date, "}";
}
else {
    echo "Error, Insert not successful";
}

?>