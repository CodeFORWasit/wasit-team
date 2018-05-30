<?php 



class create_model extends Model{

    function Insert($data)
    {
        $insert = $this->_dbs->prepare("INSERT INTO profiles "
                . "("
                    . "`username`, `fullName`, `borth_day`, `city`,`gander`, `telephone`,"
                    . "`languageProgam`, `about`, `skile`, `image_profile`, `url_feacbook`, `url_github`"
                . ")"
                . "   VALUES   "
                . "("
                    . ":username, :fullName, :borth_day, :city, :gander, :telephone,"
                    . ":languageProgam, :about, :skile , :image_profile, :url_feacbook, :url_github"
                . ");");

        $insert->bindParam(':username'      ,    $_SESSION["username"]       ); # 1
        $insert->bindParam(':fullName'      ,    $data["fullname"]       ); # 2
        $insert->bindParam(':borth_day'     ,    $data["borth_day"]      ); # 3
        $insert->bindParam(':city'          ,    $data["city"]           ); # 4
        $insert->bindParam(':gander'        ,    $data["gander"]         ); # 5
        $insert->bindParam(':telephone'     ,    $data["telephone"]      ); # 6
        $insert->bindParam(':languageProgam',    $data["languageProgam"] ); # 7
        $insert->bindParam(':about'         ,    $data["about"]          ); # 8
        $insert->bindParam(':skile'         ,    $data["skile"]          ); # 9
        $insert->bindParam(':image_profile' ,    $this->path_image       ); # 10  
        $insert->bindParam(':url_feacbook'  ,    $data["url_facebook"]   ); # 11
        $insert->bindParam(':url_github'    ,    $data["url_github"]     ); # 12
        
        $insert->execute();
        
    }
    
    function uploade_image($file){
       if ( isset($file['name']) && !empty($file['name'])) {
            $image = "public/img/team/".$_SESSION['username'].".".explode(".",$file['name'])[1];
            if (!file_exists($image)){
                 move_uploaded_file($file['tmp_name'],$image);
            }
            $this->path_image = $_SESSION['username'].".".explode(".",$file['name'])[1];
            
       }else { $this->path_image = "default.jpg"; }
    }

    function isProfile($user){
        $stmt = $this->_dbs->prepare("SELECT username FROM profiles WHERE username=:user"); 
        $stmt->bindParam(':user' ,$user  );
        $stmt->execute();
        return $stmt->rowCount();
    }

}
