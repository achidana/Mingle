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

$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['password'];

$sql = "INSERT INTO mingle.user_info (name,email,password) VALUES ('$name','$email','$pwd')";

$result = $conn->query($sql);
while($row = mysqli_fetch_assoc($result))
      $test[] = $row;

echo json_encode($test);

  if($insert) {
    // echo "inserted";
  	console.log("successful");
  }
  else {
  	console.log("failed");
  }

  $conn->close();


?>
