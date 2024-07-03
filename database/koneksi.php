<?php
class Database
{
    private static $dbName = 'db_user'; // nama database
    private static $dbHost = 'localhost'; // host
    private static $dbUsername = 'root'; // ussername xampp / laragon
    private static $dbPassworrd = ''; // password xampp / laragon

    private static $connection = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect()
    {
       if ( null == self::$connection )
       {
        try
        {
          self::$connection = new PDO( "dbname=".self::$dbname,";"."mysql.host=".self::$dbhost, self::$dbUsername, self
    ::$dbUserPassword);
        }
        catch(PDOException $e)
        {
           die($e->getMessage());
        }
       }
       return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }
}
?>