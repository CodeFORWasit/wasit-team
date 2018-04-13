<?php

class View {
        
    public $_title = "Shop";
    public $_argv = array();
    
    
    function render($body,$_header=null,$_foter=null){
        if ($_header != null){
            require 'view/'.$_header.".php";
        }
        
        require 'view/'.$body.".php";
        
        if ($_foter != null){
            require 'view/'.$_foter.".php";
        }

    }
    
    function _static($name){
        return "/shoping/public/".$name;
    }

    function redirect($path){
        header("Location:/shoping/$path");
    }
    
}
