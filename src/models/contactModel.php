<?php 
require_once '../configs/database.php';

class ContactModel{
    private $table = 'contatos';
    private $conn;

    public $nome;
    public $email;
    public $telefone;
    public $dataNascimento;
    public $profissao;
    public $celular;
    private function __construct(){
        $database =  new Database();
        $this->conn = $database->createConnection();
    }

    public function getContacts(){
        $sql = "SELECT * FROM ".$this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $contacts;
    }
}

?>