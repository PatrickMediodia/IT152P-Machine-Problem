<?php
    include_once('connects.php');

    $query = "SELECT * FROM `temphumrecords`";
    $check = mysqli_query($con,$query);
    $row = mysqli_num_rows($check);
    
    $records = array();

    echo '{ "data" : ';
    while($row=mysqli_fetch_array($check)) {    
        $record = [$row['temperature'],
        $row['humidity'],
        $row['recordDateTime']];

        array_push($records, $record);
    }
    
    $out = array_values($records);
    echo json_encode($out);
    echo "}";
?>