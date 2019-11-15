<?php 
    class Database {
        private static $dbName = 'heroku_6010848f080b246';
        private static $dbHost = 'us-cdbr-iron-east-05.cleardb.net';
        private static $dbUserName = 'b2fa3fa3780f8b';
        private static $dbUserPassword = 'f15e3e76';
    
        private static $cont = null;

        //Como es una  clase statica. No esta permitido una instancia de la clase Database.
        public function _construct(){
            die('iNIT FUNCTION IS NOT ALLOWED');
        }

        public function connect(){
            //one connection throught whole app.
            if(null == self::$cont){
                try{
                    self::$cont= new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=". self::$dbName, self::$dbUserName, self::$dbUserPassword);
                }catch(PDOException $e)
                {
                        die($e->getMessage());
                }
                return self::$cont;
            }
        }
    
        public static function disconnect(){
            self::$cont=null;
        }
    }
?>