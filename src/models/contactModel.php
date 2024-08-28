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
    public function __construct($nome, $email, $telefone, $dataNascimento, $profissao, $celular){
        $database =  new Database();
        $this->conn = $database->createConnection();
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->dataNascimento = $dataNascimento;
        $this->profissao = $profissao;
        $this->celular = $celular;
    }

    public function getContacts(){
        $sql = 'SELECT nome, dataNascimento, email, celular FROM '.$this->table;
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
        $sql = "INSERT INTO ".$this->table." (nome, email, telefone, dataNascimento, profissao, celular) VALUES (:nome, :email, :telefone, :dataNascimento, :profissao, :celular)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':nome'=>$this->nome,
            ':email'=>$this->email,
            ':telefone'=>$this->telefone,
            ':dataNascimento'=>$this->dataNascimento,
            ':profissao'=>$this->profissao,
            ':celular'=>$this->celular,
        ]);
    }


}

?>