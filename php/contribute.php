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
//echo "Connected successfully                 ";

$name = $_POST['Name'];
$loc = $_POST['Location'];
$email = $_POST['Email'];
$type = $_POST['Type'];
$id = uniqid();

$sql = "INSERT INTO user_info (name,location,email,type,id) VALUES ('$name','$loc','$email','$type','$id')";

$insert = $conn->query($sql);

if($insert) {
	echo "Record inserted";
}

else {
	echo "Record insertion failed";
}

$conn->close();

?>
