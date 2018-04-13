<?php

class create extends Controler{
    
    public function __construct() {
        parent::__construct();
    }
    function index(){
        # Title Page
        $this->view->_title = "Create Profile";

        $this->view->_navbar  = array(
            "/shoping/#services" => "الخدمات",
            "/shoping/#about"    => "مسارنا",
            "/shoping/teams"     => "الفريق",
            "/shoping/#regester" => "التسجيل"
        );
        # Body 
        $this->view->render(
            "profile/create_profile",
            $_header="layout/header",
            $_foter="layout/footer"
        );
    }
    function send(){
        
        if (isset($_POST['email_c4i'])){

            if(preg_match("/^[a-z\.]+@codeforiraq.org$/", $_POST['email_c4i'])){
                $this->view->tkn = $this->model->get_tkn($_POST["email_c4i"]);
                $this->view->render("profile/create_profile" );

            }else{

                echo "error";
                if (!preg_match("/^[a-zA-Z\.\_]+@[a-z].+$/", $_POST['email_c4i'])){
                    echo 'هذا مو اميل عزيزي انت ';
                }else{
                    echo ' الا ميل غلط عزيزي انت '; 
                }

            }
        }else{ echo "error";echo ' لم تقم بدخال الاميل الخاص بيك ';}

    }
    
    function create_profile(){
        if (!empty($_POST)){
            if ($_POST['hcode'] == $_SESSION['token']){

                $string = "";
                foreach ($_POST as $key => $value) {
                    if(empty($value)){
                        if($key == "about"){
                             $string .= "  $('textarea[id=".$key."]').addClass('is-invalid');";
                        }else{
                            $string .= "  $('input[id=".$key."]').addClass('is-invalid');";
                        }
                    }

                }

                // 
                if( empty($_FILES["file"]['name']) || (explode("/", $_FILES["file"]['type'])[0] != "image") ) {
                    $string .= "  $('label[id=file]').removeClass('btn-outline-primary').addClass('btn-outline-danger');";
                }

                // 
                if (!empty($string)){
                    echo "error $('input').removeClass('is-invalid');  $('label[id=file]').removeClass('btn-outline-danger').addClass('btn-outline-primary'); ".$string." $('#text-suc-err').text(' املا جميع الحقول ');";
                }else{
                    $about = str_replace("/\\n/", "<br>", $_POST['about']);
                    $user  = explode("@", $_SESSION['email'])[0];
                    $imgname = $user.".".explode(".", $_FILES['file']['name'])[1];

                    if($this->model->Insert(   
                        $user,
                        $_POST['fullname'],
                        $_SESSION['email'],
                        $_POST['city'],
                        $_POST['phone'],
                        $about,
                        $_POST['langProg'],
                        $imgname,
                        $_POST['facebook'],
                        $_POST['github']
                    )){move_uploaded_file($_FILES['file']["tmp_name"], "public/img/team/".$imgname);}
                }
            }else{ 
                echo "error
                $(\"input[id=hcode]\").addClass('is-invalid')
                $('#text-suc-err').text(' الهاش كود لتفعيل البروفايل خطا ');"; 
            }


        }else{
            echo "error ";
        }

    }

}