<?php

    // DAtABASE CONFIG	 MySQL 
    define('DB_TYPE', 'mysql'    );
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'root'     );
    define('DB_PASS', ''         );
    define('DB_NAME', 'c4iraq'   );
    
    
    // Main url 
    define('URL', isset($_GET['url']) ? array_shift($_GET) : null);


    // EMAIL:code4iraqh@gmail.com || PASSWROD :Code@Iraq
    define("EMAIL_SITE",'code4iraqh@gmail.com' );
    
    // Main Path 
    define('M_PATH',"http://localhost/wasit-team/"); 
    // Main View  ( function  Index ) from all Controller
    define("INDEX","index"                        );
    
    // PATH Librarys
    define('LIB'     , 'libs/'        );
    define('CTRL'    , 'controler/'   );
    define('DATA'    , 'data/'        );
    define('STATICS' , 'public/'      );
    define("VIEW"    , "view/"        );
    define("MODEL"   , "models/"      );