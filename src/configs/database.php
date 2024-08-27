<?php 

class Database{
    private $host = 'localhost';
    private $database_name = 'alphacode';
    private $username = 'root';
    private $password = 'root';
    private $port = 3309;
    public $conn;

    public function createConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";port=". $this->port.";dbname=". $this->database_name, $this->username, $this->password);
        }catch(PDOException $err){
            echo ("Erro no servidor: ".$err->getMessage());
        }
    }

}





?>