<?php
class profile extends Controler{  
    public function __construct() {
        parent::__construct();
    }
    // Main PAGE FOR ' class profile '  
    // route " profile/ "
    function index($argv){
    	if(isset($argv[0]) ){
            # Select Info Profile from database 
	    $db = $this->model->selectByUser($argv[0]); 
	    # Cheak 
            if( isset($db['username']) ){
                #Set Title 
	        $this->view->_title = $db['fullName'];

                #Set data 
                $this->view->data = $db;
                
                $this->view->_navbar  = array(
                    M_PATH             => "الرئسية",
                    M_PATH."/teams"          => "الفريق",
                );
                
                if( isset($_SESSION['login']) && $argv[0] == $_SESSION['user'] ) {
                    $this->view->_navbar['edit'] = "تعديل"; 
                }
                
                # requer View
                $this->view->render(
                    "profile/profile",
                    $_header="layout/header",
                    $_foter="layout/footer"
                ); 
                
             }else{ $this->view->redirect("teams"); }
        }else{ $this->view->redirect("teams"); }
    }
    
    #Router profile/edit
    function edit($argv){
        # Title Page
        $this->view->_title = "Update Profile";
        # NAVBAR ul->li
        $this->view->_navbar  = array(
            M_PATH  => "الرئسية",
            $_SESSION['user'] => "الملف الشخصي"
        );

        if ( !isset($_SESSION['login']) ){
            $this->view->redirect("teams");
        }
        
        $db = $this->model->selectByUser($_SESSION['user']);
        
        if(!empty($db)){
            
            if($this->method == "POST"){
                if(!empty($_FILES['file']["name"])){ $this->model->uploade_image($_FILES['file']); }
                else{ $this->model->uploade_image($_POST['images']); }
                $this->model->updateByUser($_POST);
                
                $this->view->redirect("profile/".$_SESSION['user']);
            }
            
            
            $this->view->db = $db;
            
            $this->view->render(
               "profile/edit",
               $_header="layout/header",
               $_foter="layout/footer"
           ); 
            
        }else{ $this->view->redirect("log/in"); }

    }
        
}
