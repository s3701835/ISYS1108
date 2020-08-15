<?php

/*
 * 1. Server name needs to be changed maybe
 * 2. Check username and pass
 * 3. db needs name
 * 4. line 27 - 28 fields need the right name, ask edmund
 * */

$location_id = $_POST["id"];
$location_name = $_POST["locationName"];
$location_coordinate = $row["Coordinate"];
$location_min_time = $row["MinTime"];
$location_description = $row["Description"];

$servername= "http://121.200.18.218";
$username = "john";
$password = "123456789";
$db = "";

$conn = new mysqli($servername, $username, $password, $db);

if ($con ->connect_error){
    die("Connection Failed".$conn->connect_error);
}

$sql = "UPDATE database SET locationName='$location_name', locationCoordinate='$location_coordinate', MinTime='$location_min_time', description='$location_min_time'
          WHERE id='$location_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated: ".$location_id."-".$location_name."-".$location_coordinate."-".$location_min_time."-".$location_description;
} else {
    echo "Error: ". $sql."<br>".$conn->error;
}