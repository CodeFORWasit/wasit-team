<?php 

    
    // START SESSION     
    @session_start();
    
    require "./setting.php";

    
    spl_autoload_register(function($name) {
       // include all librarys From Folder ' libs '
       require LIB.strtolower($name).".php";
    });
//    session_destroy();
    new Bootstrap();
?>
