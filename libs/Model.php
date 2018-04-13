<?php
// $odbc="odbc:Driver={SQL Server};Server=$server;Database=$database;";
// "mysql:host=$_HOST;dbname=$_DB", $_USER, $_PASS
// 'sqlite:example.db'

class Model {
 
	 function __construct(){
	 	// echo
		try {

			$this->_dbs = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",DB_USER, DB_PASS);
			// $this->_dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){

			$this->_dbs = $e;
		}

	 }
}

