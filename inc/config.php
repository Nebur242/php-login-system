<?php 

    if(!defined('__CONFIG__')){
        exit('You do not have config file');
    }

    //Our config is below

    //Include the DB.php file
    include_once "classes/db.php";

    $con = DB::getConnection();
    
?>