<?php

include_once('connects.php');

$query = "SELECT * FROM emailrecords";
$result = mysqli_query($con,$query);

$msg= "Temperature is higher than the desired temperature. Fan is triggered.";
$msg=wordwrap($msg,70);

while($row=mysqli_fetch_array($result)) {    
    mail($row['email'],"Temperature Update",$msg);
}
?>