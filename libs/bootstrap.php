<?php 



class Bootstrap{

    // Contorller 
    private $_ctrl = null;
    function __construct() {
        // Check if null or string' "/" '
        if (URL != null){

            $argv = explode("/", trim(URL,"/"));
            $cls  = array_shift($argv);
            $file_ctrl = CTRL.$cls.".php";
            if (file_exists($file_ctrl)){
                require $file_ctrl;
                $this->requireCtrl($cls,$argv);

            }else{$this->defaultPage(INDEX);}
        }else{$this->defaultPage(INDEX);}
        
    }

    // require Contorller Page from Folder controller 
    function requireCtrl($cls,$argv){
        
        $this->_ctrl = new $cls;
        $this->_ctrl->loadModel($cls);
        $func = (isset($argv[0]) && method_exists($this->_ctrl, $argv[0])) ? array_shift($argv) : "index";
        $this->_ctrl->{$func}($argv);
        
    }

    function defaultPage($main){
        require CTRL.$main.".php";
        $this->_ctrl = new $main;
        $this->_ctrl->{'index'}();
    }

}
