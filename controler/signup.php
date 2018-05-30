<?php 

class signup extends Controler{
    
    public function __construct() {
        parent::__construct();
    }

    function index(){

        # Title Page
        $this->view->_title = "SignUp Team";
        # Navbar Iteams
        $this->view->_navbar  = array(
            M_PATH  => "الرئسية",
            "log/in"  => "تسجيل الدخول"
        );
        # Message Error 
        $this->view->_style = ".msg-err{display:none}";
        

        # If method request POST
        if ($this->method == 'POST' ){  
            # username from email : alaa.akiel@codeforiraq.org =>=> " alaa.akiel "
            $username = explode("@codeforiraq.org",$_POST['email'])[0];
            
            if( $this->model->isProfile($username) ){ $this->view->redirect("profile/".$username); }
            
            if ( !$this->model->emailChk($username) ){

                if( isset($_POST['email']) && !empty($_POST['email']) && $this->model->isEmail($_POST['email']) ){

                    if( isset($_POST['pwd']) && !empty($_POST['pwd']) && $this->model->isPass($_POST['pwd']) ){

                        
                        $this->model->Insert2Users( $username ,$_POST['email'],$_POST['pwd']);
                        $this->view->mailBody =  $this->model->sendMail( $_POST['email'], $_POST['fullname'] );
                        
                        $_SESSION['username'] =  $username;
                        $_SESSION['fullName'] =  $_POST['fullname'];
                        $_SESSION['signup'  ] =  1;
                        
                    }else { $this->view->_style .= "#pwd{display:block} #password{border:1px solid red}"; }

                }else { $this->view->_style .= "#mail{display:block} #email{border:1px solid red}"; } 

            }else{ 

                $this->model->sendMail( $_POST['email'], $_POST['fullname'] );
                $_SESSION['username'] =  $username;
                $_SESSION['fullName'] =  $_POST['fullname'];
                $_SESSION['signup'  ] =  1;
                
            }

        }
        
        
        if ( isset($_SESSION['signup']) ) {

            $this->view->mail =  $_SESSION['username']."@codeforiraq.org";
            
            $this->view->render('sendmail',
               $_header="layout/header",
               $_foter="layout/footer"
            );
            
        }elseif( !isset($_SESSION['signup']) && !isset($_SESSION['login']) ){
            
            $this->view->render(
                "signup",
                $_header="layout/header",
                $_foter="layout/footer"
            );
                        
        }else{ $this->view->redirect("teams"); }
        
    }
    
    function resend(){
        if ( isset($_SESSION['username']) && isset($_SESSION['fullName']) && isset($_SESSION['signup']) ){
            
            $this->model->sendMail( $_SESSION['username']."@codeforiraq.org", $_SESSION['fullName'] );  
        } 
        
        $this->view->redirect("signup");
    }
}
