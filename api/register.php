<?php 

    define('__CONFIG__' , true);
    require_once "./../inc/config.php";

    // header('Content-Type : application/json');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        header('Content-Type: application/json');
        
        $return = [];
        $return['redirect'] = '/dashboard.php';
        $return['name'] = 'nothing fency !';

        $array = ['test' , 'test2' , 'test3' , array('name' => 'hello' , 'lastname' => 'test')];
        echo json_encode($return , JSON_PRETTY_PRINT);
    }else{
        exit('Method not allowed !');
    }

   

?>