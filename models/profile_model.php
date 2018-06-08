<?php 

class profile_model extends Model{
    
    // SET token & Name fro email
    function selectByUser($user){
    	$s = $this->_dbs->prepare("SELECT * FROM profiles where username=:user");
    	$s->bindParam(':user',$user);
    	$s->execute();
    	return $s->fetch(PDO::FETCH_ASSOC);
    }
    
    function updateByUser($data){
        $update = $this->_dbs->prepare("UPDATE profiles SET"
                . "`fullName`=:fullName,"
                . " `borth_day`=:borth_day, `telephone`=:telephone,"
                . "`languageProgam`=:languageProgam, `about`=:about,"
                . " `skile`=:skile, `image_profile`=:image_profile, "
                . "`url_feacbook`=:url_feacbook, `url_github`=:url_github"
                
                . " WHERE `username`=:username "
                . "" );

        $update->bindParam(':username'      ,    $_SESSION['user']       ); # 1
        $update->bindParam(':fullName'      ,    $data["fullname"]       ); # 2
        $update->bindParam(':borth_day'     ,    $data["borth_day"]      ); # 3
//        $update->bindParam(':city'          ,    $data["city"]           ); # 4
//        $update->bindParam(':gander'        ,    $data["gander"]         ); # 5 
        $update->bindParam(':telephone'     ,    $data["telephone"]      ); # 6
        $update->bindParam(':languageProgam',    $data["languageProgam"] ); # 7
        $update->bindParam(':about'         ,    $data["about"]          ); # 8
        $update->bindParam(':skile'         ,    $data["skile"]          ); # 9
        $update->bindParam(':image_profile' ,    $this->path_image       ); # 10  
        $update->bindParam(':url_feacbook'  ,    $data["url_facebook"]   ); # 11
        $update->bindParam(':url_github'    ,    $data["url_github"]     ); # 12
        
        $update->execute();
        
    }
    
    function uploade_image($file){
       if ( isset($file['name']) && !empty($file['name'])) {
            $image = "public/img/team/".$_SESSION['user'].".".explode(".",$file['name'])[1];
            if (!file_exists($image)){
                 move_uploaded_file($file['tmp_name'],$image);
            }
            
            $this->path_image = $_SESSION['user'].".".explode(".",$file['name'])[1];;
       }else{$this->path_image = $file;  }
    }
}
