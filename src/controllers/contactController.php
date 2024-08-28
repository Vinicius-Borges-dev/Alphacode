<?php
require __DIR__ . '/../models/contactModel.php';

class ContactController{

    public static function verifyContactExists($nome, $email, $telefone, $dataNascimento, $profissao, $celular){
        $contact = new ContactModel($nome, $email, $telefone, $dataNascimento, $profissao, $celular);
        return $contact->verifyContactExists();
    }
    public function createContact(){
        $data = json_decode(file_get_contents('php://input'), true);

        $nome = $data['nome'];
        $email = $data['email'];
        $telefone = $data['telefone'];
        $date = explode('/', $data['dataNascimento']);
        $dataNascimento = $date[2]."-".$date[1]."-".$date[0];
        $profissao = $data['profissao'];
        $celular = $data['celular'];


        if(!$this->verifyContactExists($nome, $email, $telefone, $dataNascimento, $profissao, $celular)){
            $contact = new ContactModel($nome, $email, $telefone, $dataNascimento, $profissao, $celular);
            $contact->create();
            echo json_encode(['status'=>'ok', 'message'=>'Contato adicionado']);
        } else{
            echo json_encode(['status'=>'error', 'message'=> 'Contato já existe no banco de dados']);
        }

        
    }


}

?>