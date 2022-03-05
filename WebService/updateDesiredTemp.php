<?php

include_once('connects.php');

if (isset($_POST['submit'])) {
	$temperature = $_POST['desiredTemp'];

	$query = "UPDATE temperature SET desiredTemp = '$temperature' ";
	$result = mysqli_query($con,$query);

	if($result) {
		header("Location: ../Home.php");
		exit;
	}
	else {
		echo "Error, Insert not successful";
	}
}
?>