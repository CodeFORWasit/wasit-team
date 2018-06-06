<?php

class View {
        
    public $_title = "Code For Wasit";
    
    
    function render($body,$_header=null,$_foter=null){

        if ($_header != null){
            require VIEW.$_header.".php";
        }
        
        require VIEW.$body.".php";
        
        if ($_foter != null){
            require VIEW.$_foter.".php";
        }

    }
    
    function _static($name){
        return M_PATH.STATICS.$name;
    }

    function redirect($path,$time=0){
        header("Refresh:$time; url=".M_PATH.$path);
    }
    
}
