<?php 

class signup_model extends Model{

	// SET token & Name fro email
    function Insert2Users($user,$email,$pass)
    {
    	try{

            $stmt = $this->_dbs->prepare("INSERT INTO users "
                    . " (username,email,password) "
                    . "     VALUES                "
                    . " (:user,:email,:pass)      "
            ); 
            
            $stmt->bindParam(':user' ,$user  );
            $stmt->bindParam(':email',$email );
            $stmt->bindParam(':pass' ,$pass  );

            $stmt->execute();

            return True ;

    	}catch(PDOExcetion $err){
            
            return False;
            
    	}

    }
    
    function emailChk($user){
        $stmt = $this->_dbs->prepare("SELECT * FROM users WHERE username=:user"); 

        $stmt->bindParam(':user' ,$user  );
        $stmt->execute();


        return $stmt->rowCount();   
    }
    
    function isEmail($email){
        if (preg_match("/^[a-z\._]+@codeforiraq.org+$/",$email)){
            return 1;
        }
        return 0;
    }
    
    function isPass($pass){
        
        if ( preg_match("/^[a-z\$\.\!\@\#\$\%\^\&\*\(\)\_\+\=]+$/",$pass) && strlen($pass) > 8 ){
            return 1;
        }
        return 0;    
        
    }
 
    function isProfile($user){
        $stmt = $this->_dbs->prepare("SELECT username FROM profiles WHERE username=:user"); 
        $stmt->bindParam(':user' ,$user  );
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function sendMail($email,$fname)
    {
        $this->tk = sha1(md5($email."Wisat#Iraq".$fname));//.getdate()['minutes']);
        
        $link  = "http://localhost/c4w/create/token/".$this->tk."/".$email;
        $body = ''
                    .'<div class="container" style=" background-color: #333 ;padding: 15px;margin: 20%;color: white;width: 60%;text-align: center;border-radius: 10px;box-shadow: 0 10px 20px 0 #333;">'
                        . " <h1> Hello $fname </h1>"
                        . "<a type='submit' href='$link' "
                        .   ' style="padding: 10px;;background-color: #007bff;border: 0;color:white;border-radius: 10px;" >'
                        . 'اكمل عمليت التسجيل'
                        . '</a>'
                    . '</div>'
                . ''   
                ;
        
        $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: alaa.21.iraq@gmail.com' . "\r\n";
        mail($email, "Code For Iraq <Wasit Teams>", $body, $headers); 
        return $body;
    }
 
}
