<?php 

class Database{
    private $host = 'localhost';
    private $database_name = 'alphacode';
    private $username = 'root';
    private $password = 'root';
    private $port = 3306;
    public $conn;

    public function createConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";port=". $this->port.";dbname=". $this->database_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        }catch(PDOException $err){
            echo ("Erro na conexão ao banco de dados: ".$err->getMessage());
        }

        return $this->conn;
    }

}





?>