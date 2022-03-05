<?php
	include_once('connects.php');

	$query = "SELECT * FROM `temperature`";
	$result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result); 
	
    if($row['currentTemp'] > $row['desiredTemp']) {
        echo "ON";
    }
    else {
        echo "OFF";
    }
?>