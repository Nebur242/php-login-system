<?php 

    if(!defined('__CONFIG__')){
        exit('You do not have config file');
    }

    class DB{
        
        protected static $con;

        private function __construct(){
            try {
                self::$con = new PDO("mysql:host=localhost;port=3306;dbname=login_course" , 'root' , 'root');
                self::$con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                self::$con->setAttribute(PDO::ATTR_CASE , false);
                // echo 'db connected';
            } catch ( PDOException $e ) {
                echo $e->getMessage();
                echo "Could not connect to database . " ; exit;
            }
        }

        public static function getConnection(){
            if(!self::$con){
                new DB();
            }

            return self::$con;
        }
    }

?>