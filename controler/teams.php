<?php

class teams extends Controler{

    public function __construct() {
        parent::__construct();
    }

    function index($user){
        
        # Title Page
        if (count($user) == 1 && !empty($user[0])){

            $this->view->_title = strtoupper($user[0]);
            $this->view->db = $this->model->selectByUser($user[0]);
            $this->view->render(
                "profile/profile",
                $_header="layout/header",
                $_foter="layout/footer"
            );

        }
        else{
                $this->view->_title = "WASIT TEAMS";
                $this->view->db = $this->model->select();
                $this->view->render(
                    "teams",
                    $_header="layout/header",
                    $_foter="layout/footer"
                );
        }


    }

    
}