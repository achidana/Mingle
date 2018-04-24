<?php

class DB {
	private $dbconn;

	private $serverName = "mingle.cf7aqbrc9mtd.us-east-1.rds.amazonaws.com";
	private $connectionInfo = array("Database"=>"mingle", "UID"=>"mingle", "PWD"=>"cs252mingle");

	public function DB() {
		$this->dbconn = sqlsrv_connect($this->serverName, $this->connectionInfo);
		if( $this->dbconn  === false )
			die(print_r(sqlsrv_errors(), true));
	}

	public function query($query, $params = array()) {
		$result = sqlsrv_query($this->dbconn, $query, $params);
		if (!$result)
			return sqlsrv_errors();

		$returnArray = array();
		// saving results
		while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
			$returnArray[] = $row;

		// Free resultset
		sqlsrv_free_stmt($result);

		return $returnArray;
	}

	public function insert($tableName, $data) {
        $itemNames = "";

        for ($i = 0; $i < sizeof($data); $i++) {
            if ($i > 0)
                $itemNames .= ",";
            $itemNames .= "?";
        }

		$fieldsStr = "";
		$valuesArr = array();
		$count = 0;
		foreach ($data AS $field => $value) {
			if ($count > 0) {
				$fieldsStr .= ',';
			}
			$fieldsStr .= $field;
			$valuesArr[] = &$data[$field];
			$count++;
		}

        $stmt = sqlsrv_prepare($this->dbconn, "INSERT INTO $tableName ($fieldsStr) VALUES ($itemNames)", $valuesArr);

        if (sqlsrv_execute($stmt) === false) {
           return false;
        }

		return true;
	}

	public function getErrors() {
		if($this->dbconn !== false )
			return sqlsrv_errors();
		else
			return null;
	}

	public function close() {
		sqlsrv_close($this->dbconn);
	}
}

?>
