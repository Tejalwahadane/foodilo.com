<?php
   
    //start session   ---sessionis only valid as long as browser is open
    session_start();

    define('SITEURL','http://localhost/foodilo/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','food form');



    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_query());
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_query());

?>  