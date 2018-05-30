<?php 

class log extends Controler{
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){ $this->view->redirect("log/in"); }
    
    # LOG IN
    function in($argv){
        
        # MESSAGE ERROR 
        $this->view->Error = "none";  
        # Title Page
        $this->view->_title = "Login Team";
        # NAVBAR ITEAMS 
        $this->view->_navbar  = array(
            M_PATH   => "الرئسية",
            M_PATH."teams"  => "الفريق",
        );
        
         
        if ( isset($_SESSION['login']) ) { $this->view->redirect("profile/".$_SESSION['user']); }
        
        if ($this->method == "POST"  && isset($_POST['email']) && isset($_POST['pwd']) ){
            
            $chk = $this->model->log_in($_POST['email'],$_POST['pwd']);
            
            if ( !empty($chk) ){
                
                $_SESSION['user' ]    = $chk['username'];
                $_SESSION['email']    = $chk['email'];
                $_SESSION['login']    = 1;
                
                $this->view->redirect("profile/".$_SESSION['user']);
            }  
            
            $this->view->Error = "block";    
        }
              
        # Body 
        $this->view->render(
            "login",
            $_header="layout/header",
            $_foter="layout/footer"
        );
    }
    
    # LOG OUT
    function out(){
        if (isset($_SESSION['login'])){
            session_destroy();
        }
        $this->view->redirect("teams");  
    }
    

}
