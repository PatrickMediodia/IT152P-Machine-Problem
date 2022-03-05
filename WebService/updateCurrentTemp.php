<?php 

include_once('connects.php');
$temp = $_GET['temp'];

$query = "UPDATE temperature SET currentTemp = '$temp' ";
$result = mysqli_query($con, $query);

if($result) {
    echo "Insert Successful\n";
    echo "{Current Temp: ", $temp, " }";
}
else {
    echo "Error, Insert not successful";
}

?>