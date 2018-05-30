<?php

class log_model extends Model {
    
    function log_in($email,$pass){
        
        $stmt = $this->_dbs->prepare("SELECT `username`,`email`,`password`,`status` FROM users WHERE `email`=:email AND `password`=:pwd ");
        $stmt->bindValue(":email",$email);        
        $stmt->bindValue(':pwd',$pass);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);  
    }
    
}
