<?php

class Controler {
    
    public function __construct() {
        
        $this->view = new View();
        
    }
    
    function loadModel($name,$path_model="models/"){
        $nameModel = $name."_model";
        $path_models = $path_model.$nameModel.".php";
        if(file_exists($path_models)){
            require $path_models;
            $this->model = new  $nameModel;
        }
    }
}