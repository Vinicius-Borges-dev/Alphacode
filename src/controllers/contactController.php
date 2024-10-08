<?php
require __DIR__ . '/../models/contactModel.php';


class ContactController
{

    public static function verifyContactExists($nome, $email, $telefone, $dataNascimento, $profissao, $celular, $receberWhatsapp, $receberSms, $receberEmail)
    {
        $contact = new ContactModel();
        $contact->nome = $nome;
        $contact->email = $email;
        $contact->telefone = $telefone;
        $contact->dataNascimento = $dataNascimento;
        $contact->profissao = $profissao;
        $contact->celular = $celular;
        $contact->receberWhatsapp = $receberWhatsapp;
        $contact->receberSms = $receberSms;
        $contact->receberEmail = $receberEmail;

        return $contact->verifyContactExists();
    }
    public function createContact(){
        $data = json_decode(file_get_contents('php://input'), true);
        $nome = $data['nome'];
        $email = $data['email'];
        $telefone = $data['telefone'];
        $date = explode('/', $data['dataNascimento']);
        $dataNascimento = $date[2] . "-" . $date[1] . "-" . $date[0];
        $profissao = $data['profissao'];
        $celular = $data['celular'];
        $receberWhatsapp = 0;
        $receberSms = 0;
        $receberEmail = 0;

        if ($data['receberWhatsapp']) {
            $receberWhatsapp = 1;
        } elseif ($data['receberSms']){
            $receberSms = 1;
        } else if ($data['receberEmail']){
            $receberEmail = 1;
        }

        if (!$this->verifyContactExists($nome, $email, $telefone, $dataNascimento, $profissao, $celular, $receberWhatsapp, $receberSms, $receberEmail)) {
            
            $contact = new ContactModel();
            $contact->nome = $nome;
            $contact->email = $email;
            $contact->telefone = $telefone;
            $contact->dataNascimento = $dataNascimento;
            $contact->profissao = $profissao;
            $contact->celular = $celular;
            $contact->receberWhatsapp = $receberWhatsapp;
            $contact->receberSms = $receberSms;
            $contact->receberEmail = $receberEmail;

            $contact->create();
            header('', true, 201);
            echo json_encode(['status'=> 'criado com sucesso']);
        } else {
            header('', true,400);
            echo json_encode(['status'=> 'contato já existe']);
        }
    }

    public function updateView($view, $data = []){
        extract($data);

        include(__DIR__.$view);
    }

    public function getContacts()
    {
        $contact = new ContactModel();
        $contacts = $contact->getContacts();
        

        $this->updateView('/../views/contacts.php', [
            'contatos' => $contacts
        ]);
    }

    public function showUpdateForm(){
        $data = json_decode(file_get_contents('php://input'), true);

        $contact = new ContactModel();
        $result = $contact->getContactById($data['id']);
        
        $this->updateView('/../views/edit.php', [
            'contato' => $result
        ]);
    }

    public function updateContact(){
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];
        $nome = $data['nome'];
        $email = $data['email'];
        $telefone = $data['telefone'];
        $date = explode('/', $data['dataNascimento']);
        $dataNascimento = $date[2] . "-" . $date[1] . "-" . $date[0];
        $profissao = $data['profissao'];
        $celular = $data['celular'];
        $receberWhatsapp = 0;
        $receberSms = 0;
        $receberEmail = 0;

        if ($data['receberWhatsapp']) {
            $receberWhatsapp = 1;
        } elseif ($data['receberSms']){
            $receberSms = 1;
        } else if ($data['receberEmail']){
            $receberEmail = 1;
        }

        $contact = new ContactModel();
        $contact->nome = $nome;
        $contact->email = $email;
        $contact->telefone = $telefone;
        $contact->dataNascimento = $dataNascimento;
        $contact->profissao = $profissao;
        $contact->celular = $celular;
        $contact->receberWhatsapp = $receberWhatsapp;
        $contact->receberSms = $receberSms;
        $contact->receberEmail = $receberEmail;

        $contact->update($id);
    }

    public function deleteContact(){
        $data = json_decode(file_get_contents('php://input'), true);


        $contact = new ContactModel();
        $contact->delete($data['id']);
    }
}
