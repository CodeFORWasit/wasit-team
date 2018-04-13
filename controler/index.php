<?php

class index extends Controler{
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        
        # Title Page
        $this->view->_title = "CODE FOR WASIT";
        $this->view->_navbar  = array(
                "#services" => "الخدمات",
                "#about"    => "مسارنا",
                "teams"     => "الفريق",
                "#regester" => "التسجيل"
        );

        # Body 
        $this->view->render(
                    "index",
                    $_header="layout/header",
                    $_foter="layout/footer"
            );
    }

}
