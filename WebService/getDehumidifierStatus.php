<?php
	include_once('connects.php');

	$query = "SELECT * FROM `humidity`";
	$result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result); 
	
    if($row['currentHumidity'] > $row['maxHumidity']) {
        echo "HIGH";
    }
    else if($row['currentHumidity'] < $row['minHumidity']) {
        echo "LOW";
    }
    else {
        echo "NORMAL";
    }
?>