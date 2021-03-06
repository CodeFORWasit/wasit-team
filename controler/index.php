<?php

class index extends Controler{
    
    public function __construct() {
        parent::__construct();
    }
    
    // Main PAGE FOR ' class index '  
    // route " / " 
    function index(){

        # Title Page
        $this->view->_title = "CODE FOR WASIT";
        
                
        
        $this->view->_fixed = "fixed-top";
        
        # NAVBAR ul->li  
        $this->view->_navbar  = array(
                "#services" => "الخدمات",
                "#about"    => "مسارنا",
                "teams"     => "الفريق",
                
                "#regester" => "التسجيل"
        );
        
        if( isset( $_SESSION['login']) ) {
            $this->view->_navbar['links'] = "روابط مهمه";
        }
        

        #  VIEW FILE  
        $this->view->render(
                    "index",
                    $_header="layout/header",
                    $_foter="layout/footer"
        );
    }

}
