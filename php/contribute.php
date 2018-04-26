<?php

$DB_NAME = "mingle";
$DB_USER = "mingle";
$DB_PASSWORD = "cs252mingle";
$DB_HOST = "mingle.cf7aqbrc9mtd.us-east-1.rds.amazonaws.com";
$DB_PORT = 3306;

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD,$DB_NAME,$DB_PORT);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$name = $_POST['name'];
$email = $_POST['email'];
$start = $_POST['startDate'] + " " + $_POST['startTime'];
$end = $_POST['endDate'] + " " + $_POST['endTime'];
$url = $_POST['url'];
$lat = (float) $_POST['lat'];
$lng = (float) $_POST['lng'];

$sql = "INSERT INTO mingle.events_info (name,email,start,end,url,lat,lng) VALUES ('$name', '$email', '$start','$end','$email',$lat,$lng)";

echo $sql;
//$sql = "INSERT INTO events_info (name,location,email,type) VALUES ('$name','$loc','$email','$type')";
//$sql = "INSERT INTO mingle.events_info (name,email,start,end,url,lat,lng) VALUES ('Pancake Night', 'shreveclub@purdue.edu', '2018-04-24 21:00:00','2018-04-24 22:00:00','www.purdue.edu',40.3,-86.7)";

$insert = $conn->query($sql);

if($insert) {
	console.log("successful");
}

else {
	console.log("failed");
}

$conn->close();

?>
