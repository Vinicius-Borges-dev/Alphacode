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
    public function createContact()
    {
        $data = json_decode(file_get_contents('php://input'), true);

        error_log("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa".print_r($data, true));

        $nome = $data['nome'];
        $email = $data['email'];
        $telefone = $data['telefone'];
        $date = explode('/', $data['dataNascimento']);
        $dataNascimento = $date[2] . "-" . $date[1] . "-" . $date[0];
        $profissao = $data['profissao'];
        $celular = $data['celular'];
        $receberWhatsapp = $data['receberWhatsapp'];
        $receberSms = $data['receberSms'];
        $receberEmail = $data['receberEmail'];


        if (!$this->verifyContactExists($nome, $email, $telefone, $dataNascimento, $profissao, $celular, $receberWhatsapp, $receberSms, $receberEmail)) {
            $contact = new ContactModel();
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
            echo json_encode(['status' => 'ok', 'message' => 'Contato adicionado']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Contato já existe no banco de dados']);
        }
    }

    public function updateView($view, $data = [])
    {
        extract($data);

        ob_start();
        include(__DIR__.$view);
        $newView = ob_get_clean();

        return([
            'view' => $newView,
        ]);
    }

    public function getContacts()
    {
        $contact = new ContactModel();
        $contacts = $contact->getContacts();
        

        echo json_encode($this->updateView('/../views/contacts.php', [
            'contatos' => $contacts
        ]));
    }
}
