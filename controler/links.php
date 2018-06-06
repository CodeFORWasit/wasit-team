<?php


class links extends Controler{
    
    public function __construct() {
        parent::__construct();
    }
    
    
    function index(){

        # Title Page
        $this->view->_title = "Page Team";
        # NAVBAR ITEAMS 
        $this->view->_navbar  = array(
            M_PATH   => "الرئسية",
            M_PATH."teams"  => "الفريق",
            
        );
        
        # Body 
        $this->view->render(
            "links",
            $_header="layout/header",
            $_foter="layout/footer"
        );
    }
}
