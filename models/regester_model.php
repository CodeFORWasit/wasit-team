<?php


class regester_model extends Model {
    
    function send_to_manger($email,$to){
       
        $link  = M_PATH."download/".$this->name;
        $body = ''
                .'<div>'
                    . " <h3> From $email  </h3>"
                    . "<a href='$link' style='font-size:25px;' >"
                    . 'CV Download'
                    . '</a>'
                . '</div>'
                . ''   
                ;
        
        $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From: ".EMAIL_WEBSITE. "\r\n";
        mail($to, "Code For Iraq <Wasit Teams>", $body, $headers); 

    }
    
    function save_cv($file,$email){
        $this->name = md5($email).".".$file['name'];
        $cv = DATA.$this->name;
        
        if (!file_exists($cv)){
             move_uploaded_file($file['tmp_name'],$cv);
             
        }
         
    }
    

}
