<?php
	include_once('connects.php');

	$query = "SELECT * FROM `temperature`";
	$result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result); 
	
	date_default_timezone_set('Asia/Manila');
	$date = date('m/d/Y h:i a', time());

	$current_timestamp = time();
	$last_timestamp = strtotime($row['timestamp']);

	$time_difference = $current_timestamp-$last_timestamp;

	if($time_difference > 10) {
		echo "OFFLINE";
	}
	else {
		echo "ONLINE";	
	}
?>