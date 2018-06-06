<?php

class download extends Controler {
    public function __construct() {
        parent::__construct();
    }
    
    function index($argv){
        if(isset($argv[0])){
            $file = DATA.$argv[0];
            
            if( file_exists(DATA.$argv[0]) ){
                

                header('Pragma: public');
                header('Expires: 0');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                header('Content-Type: application/octet-stream');

                header('Content-Disposition: attachment; filename="'. basename($file) . '";');
                header('Content-Transfer-Encoding: binary');
                header('Content-Length: ' . filesize($file));

                readfile($file);
                
            }
        }
        $this->view->redirect("");
    }
}
