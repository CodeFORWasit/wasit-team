<?php 

class teams_model extends Model{


    function select(){

    	$select = $this->_dbs->prepare("SELECT username,fullName,about,image_profile as img FROM profiles ");
    	$select->execute();
        
    	return $select->fetchAll(PDO::FETCH_ASSOC);
    }

}
