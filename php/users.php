<?php

  //date_default_timezone_set("America/Indianapolis");
  require_once('db.inc');

  $db = new DB();

  $results = $db->query("INSERT INTO user_info
  VALUES (name, email, 1234, interests)");

  $db->close();

	//echo($results[0]);

	//sort the array

	echo json_encode($results);
//}

class XD {
	public $pos;
	public $xdid;
	public $roadname;
	public $roadnumber;
	public $direction;
	public $startmm;
	public $endmm;
	public $geo;
}

?>
