<?php

class create extends Controler{
    
    public function __construct() {
        parent::__construct();
    }
 
    // route /create/
    function index($argv){
        
        # Title Page
        $this->view->_title = "Create Profile";
        # NAVBAR ul->li
        $this->view->_navbar  = array(
            M_PATH     => "الرئسية",
            "log/in"  => "login",
        );
        // Create new Token         

        if ( $this->method == "POST" && isset($_POST['create']) && isset($_SESSION['signup'])){
                
                $this->model->uploade_image($_FILES['file']);
                $this->model->Insert($_POST);
                setcookie($_SESSION,$value=$_POST['fullname']);
                session_destroy();       
                $this->view->redirect("teams");
                 
        }elseif( isset($_SESSION['signup']) && !$this->model->isProfile($_SESSION['username']) ){

            $this->view->render(
                "profile/create",
                $_header="layout/header",
                $_foter="layout/footer"
            );
                  
        }else{ $this->view->redirect("signup");  } 
        
    }
    
    
    function token($argv){
        if( isset($argv[0]) && isset($argv[1]) && isset($_SESSION['fullName']) ){
            $token = sha1(md5($argv[1]."Wisat#Iraq".$_SESSION['fullName']));//.getdate()['minutes']);
            if ( $token == $argv[0] ){
                
                $this->view->redirect("create");
            }else{

                $this->view->redirect("signup"); 
            }  
        }else{  $this->view->redirect("signup");  }   
    }
    
    
  
}
