<?php
	include_once('connects.php');

	$query = "SELECT * FROM `temperature`";
	$result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result); 
	
	echo $row['currentTemp']; 
?>