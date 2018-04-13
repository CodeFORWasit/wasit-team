<?php 



class Bootstrap{
       
    private $_controler = null;
    private $_index     = "controler/index.php"; 

    public function __construct() {
        
        if (URL){
            $_url = explode("/", rtrim(URL,"/"));

            $classs = array_shift($_url);
            $file = 'controler/'.$classs.".php";
            if (file_exists($file)){
                require $file;
                $this->Loader($classs,$_url);
            }else{
                $this->LoaderIndex();
            }
        }else{
            $this->LoaderIndex(); 
        }
    }
    function LoaderIndex(){
        require $this->_index;
        $this->_controler = new index;
        $this->_controler->{"index"}();
    }
        
    function Loader($cl,$argv){
        
        $this->_controler = new $cl;
        $this->_controler->loadModel($cl);
        
        if(isset($argv[0]) && method_exists($this->_controler, $argv[0])){
            $this->_controler->{array_shift($argv)}($argv);
        }else{
             $this->_controler->index($argv);
        } 

    }
        
    function error(){
        echo "Error Pages Not Found";
        return 0;
    }
}