<?php
class DATABASE{
    private static $username = "root";
    private static $password = "vertrigo";
    private static $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                            );
    private static $dns = "mysql:host=localhost;dbname=qltc1;port=3306";
    private static $dbcon;
    
    private function __construct(){} 
    
    public static function taoketnoi(){
        if(!isset(self::$dbcon)){
            try{
                self::$dbcon = new PDO(self::$dns, 
                                    self::$username, 
                                    self::$password, 
                                    self::$options);
            }
            catch(PDOException $e){
                $error_message = $e->getMessage();
                include("../view/error.php");
                exit();
            }
        }
        return self::$dbcon;
    }
    
    public static function dongketnoi(){
        self::$dbcon = null;
    }
}
?>
