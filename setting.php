<?php

    // Database CONFIG	 MySQL 
    define('DB_TYPE', 'mysql');
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'c4iraq');


    // Main url 
    define('URL', isset($_GET['url']) ? array_shift($_GET) : null);

    // main Path 
    define('M_PATH',"/c4w/"); 

    // Main View  ( function  Index ) from all Controller
    define("INDEX","index");
       
    // path Librarys
    define('LIB'    , 'libs/'       );
    define('CTRL'    , 'controler/');
    define('DATA'    , 'data/'       );
    define('STATICS' , 'public/'     );
    define("VIEW"    , "view/"      );
    define("MODEL"   , "models/"     );

	
	


