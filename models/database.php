<?php 
    class Database {
        private static $dbName = 'crud_tutorial';
        private static $dbHost = 'localhost';
        private static $dbUserName = 'root';
        private static $dbUserPassword = '';
    
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