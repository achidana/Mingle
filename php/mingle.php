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

$loc = $_POST['Location'];

$type = $_POST['Type'];



//$sql = "INSERT INTO user_info (name,location,email,type) VALUES ('$name','$loc','$email','$type')";
//SELECT * FROM mingle.events_info
//WHERE lat > (40.3 - .1) AND (lat < 40.3 + .1)

$insert = $conn->query($sql);

if($insert) {
	console.log("successful");
}

else {
	console.log("failed");
}

$conn->close();

?>
