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

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$num = "SELECT COUNT(*) FROM mingle.user_info
WHERE email LIKE 'test1@purdue.edu';";

if($num == 1) {
  $sql = "SELECT * FROM mingle.user_info
  WHERE email LIKE '$email';";

  $result = $conn->query($sql);
  if($pwd == $result['password']) {
      echo json_encode("Login successful");
  }

  $conn->close();
}
else {
  echo json_encode("Login failed");
  $conn->close();
}

  // while($row = mysqli_fetch_assoc($result))
  //     $test[] = $row;

  //echo json_encode($test);


  // if($insert) {
  //   // echo "inserted";
  // 	console.log("successful");
  // }
  // else {
  // 	console.log("failed");
  // }




?>
