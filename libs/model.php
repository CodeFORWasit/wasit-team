<?php

class Model {
 
	 function __construct(){
		try {

                    $this->_dbs = new PDO(
                            DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,
                            DB_USER, DB_PASS,
                            array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" )
                        );
                    
                    $this->_dbs->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
                    
                    $this->_dbs = $e;
                    
		}

	 }
}
