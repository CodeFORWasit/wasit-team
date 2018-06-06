<?php


class regester extends Controler {
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->view->error = 0;
        $this->view->_title = "Regester ";
        # NAVBAR ul->li  
        $this->view->_navbar  = array(
                M_PATH => "الرئيسه",
        );
        
        if($this->method == "POST" && isset($_POST['regEmail']) && !empty($_FILES['file']["name"]) ){
            if( preg_match("/^.*[|\.pdf|\.doc|]+$/", $_FILES['file']["name"]) ){
                if(preg_match("/^\w{4,16}+@+[|gmail|yahoo|hotmail|outlook|]+.com$/", $_POST['regEmail']) ){
                    
                        $this->view->redirect("",$time=5);
                        $this->model->save_cv($_FILES['file'],$_POST['regEmail']);   
                        $this->model->send_to_manger($_POST['regEmail'],'alaa.21.iraq@gmail.com');
                        $this->view->error = 1;
                        
                }else{
                    $this->view->msg = "الاميل غير صحيح " ;
                }
            }else{
                $this->view->msg = "doc او pdf  يجب ان تكون السيرة الذاتيه على شكل" ;
            }
        }
        
        $this->view->render("regester",
            $_header="layout/header",
            $_footer="layout/footer"
        );
          
    } 
}
