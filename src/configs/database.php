<?php 

class Database{
    private static $host = "localhost";
    private static $dbName = "alphacode";
    private static $username = "root";
    private static $password = "root";
    private static $port = 3306;
    private static $dsn;
    public static $conn;

    private function __construct()
    {
        self::$dsn = 'mysql:dbname=' . self::$dbName . ';port=' . self::$port . ';host=' . self::$host;
        try {
            self::$conn = new PDO(self::$dsn, self::$username, self::$password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $err) {
            echo 'Erro no servidor: ' . $err->getMessage();
        }
    }

    public static function connect(){
        if(!self::$conn){
            new self();
        }
        return self::$conn;
    }

    public static function sqlQuery($sql, $params=[])
    {   
        self::$conn = self::connect();
        $stmt = self::$conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

}





?>