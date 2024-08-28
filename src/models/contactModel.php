<?php 
require __DIR__ . '/../configs/database.php';

class ContactModel{
    private $table = 'contatos';
    private $conn;
    public $nome;
    public $email;
    public $telefone;
    public $dataNascimento;
    public $profissao;
    public $celular;
    public $receberWhatsapp;
    public $receberSms;
    public $receberEmail;
    public function __construct(){
        $database =  new Database();
        $this->conn = $database->createConnection();
    }

    public function getContacts(){
        $sql = 'SELECT * FROM '.$this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $contacts;
    }

    public function verifyContactExists(){
        $sql = "SELECT * FROM ".$this->table." WHERE nome = :nome AND email= :email AND telefone = :telefone AND dataNascimento = :dataNascimento AND profissao = :profissao AND celular = :celular";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':nome'=>$this->nome,
            ':email'=>$this->email,
            ':telefone'=>$this->telefone,
            ':dataNascimento'=>$this->dataNascimento,
            ':profissao'=>$this->profissao,
            ':celular'=>$this->celular,
        ]); 

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return (count($result) === 1);
    }

    public function create(){
        $sql = "INSERT INTO ".$this->table." (nome, email, telefone, dataNascimento, profissao, celular, receberWhatsapp, receberSms, receberEmail) VALUES (:nome, :email, :telefone, :dataNascimento, :profissao, :celular, :receberWhatsapp, :receberSms, :receberEmail)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':nome'=>$this->nome,
            ':email'=>$this->email,
            ':telefone'=>$this->telefone,
            ':dataNascimento'=>$this->dataNascimento,
            ':profissao'=>$this->profissao,
            ':celular'=>$this->celular,
            ':receberWhatsapp'=>$this->receberWhatsapp,
            ':receberSms'=>$this->receberSms,
            ':receberEmail'=>$this->receberEmail
        ]);
    }


}

?>