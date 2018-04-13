<?php 

class teams_model extends Model{

    function selectByUser($user){

    	$s = $this->_dbs->prepare("SELECT * FROM team_profile where user=:user");
    	$s->bindParam(':user',$user);
    	$s->execute();

    	return $s->fetch(PDO::FETCH_ASSOC);

    }

    function select(){

    	$select = $this->_dbs->prepare("SELECT user,fullName,img,about FROM team_profile ");
    	$select->execute();

    	return $select->fetchAll(PDO::FETCH_ASSOC);
    }

}
