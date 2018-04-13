<?php 

class create_model extends Model{

	// SET token & Name fro email
    function get_tkn($email){
    	$tk_ = array(
			"token" => md5(explode("@",$email)[0]."_C4Iraq-cpro"),
			"name"  => ucwords(implode( explode(".",preg_split("/@.*+$/", $email)[0]), " ")),
            "email" => $email
        );
    	$_SESSION = $tk_;
    	
	return $tk_;
    }
    
    function sendEmail($email){
          
    }

    function Insert($user,$fullname,$email,$city,$phone,$about,$langProg,$img,$fb,$github)
    {
        $insert = $this->_dbs->prepare("INSERT INTO team_profile 
                (user,fullName,email,city,phone,about,langProg,img,fb,github) 
                VALUES 
                (:user,:fullname,:email,:city,:phone,:about,:langProg,:img,:fb,:github)"
        );

        $insert->bindParam(':user',     $user);
        $insert->bindParam(':fullname', $fullname);
        $insert->bindParam(':email',    $email);
        $insert->bindParam(':city',     $city);
        $insert->bindParam(':phone',    $phone);
        $insert->bindParam(':about',    $about);
        $insert->bindParam(':langProg', $langProg);
        $insert->bindParam(':img',      $img);
        $insert->bindParam(':fb',       $fb);
        $insert->bindParam(':github',   $github);

        $insert->execute();

        return true;

    }

    function update()
    {
        return false;
    }


}
