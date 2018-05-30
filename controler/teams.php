<?php

    class teams extends Controler{

        public function __construct() {
            parent::__construct();
        }

        // Main PAGE FOR ' class teams ' 
        // route " teams/ "
        function index(){
            # set TIEL PAGE 
            $this->view->_title = "WASIT TEAMS";
            $this->view->db = $this->model->select(); 

            $this->view->_navbar = array(
                M_PATH => "الرئيسه"
            );
            
            if( !isset($_SESSION['login'])  ){
                $this->view->_navbar['log/in'] = "تسجيل دخول";
                
            }else{
                $this->view->_navbar['log/out'] = "تسجيل خروج";
                
            }

            # set VIEW PAGE 
            $this->view->render(
                "teams",
                $_header="layout/header",
                $_foter="layout/footer"
            );
        }
    }

?>
