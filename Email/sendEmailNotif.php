<?php

include_once('connects.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth(true);
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';

$mail->Username = 'japatalava@gmail.com';
$mail->Password = 'japatalava1234';

$query = "SELECT * FROM emailrecords";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)) { 
    $mail->From =('japatalava@gmail.com');
    $mail->Subject = 'Temperature Update';
    $mail->Body = 'Temperature is higher than desired temperaute. Fan is triggered';   
    //mail($row['email'],"Temperature Update",$msg);
    $mail->AddAddress($row['email']);
    $mail->Send();
}
?>