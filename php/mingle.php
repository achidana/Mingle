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

$sql = "SELECT * FROM mingle.events_info
WHERE name != ''
AND start != '0000-00-00 00:00:00'
AND end != '0000-00-00 00:00:00'
AND lat != 0
AND lng != 0";

// $sql = "SELECT * FROM mingle.events_info WHERE name LIKE 'Pancake%' AND start != '0000-00-00 00:00:00' AND end != '0000-00-00 00:00:00'";

// if($name == NULL || $email == NULL || $start == NULL || $end == NULL ||  $lat == NULL || $lng == NULL) {
//   $conn->close();
// }
// else {
  $result = $conn->query($sql);
  while($row = mysqli_fetch_assoc($result))
      $test[] = $row;

  echo json_encode($test);

  //echo json_encode($insert);

  if($insert) {
    // echo "inserted";
  	console.log("successful");
  }
  else {
  	console.log("failed");
  }

  $conn->close();
// }


?>
