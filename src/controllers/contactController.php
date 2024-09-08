<?php
require __DIR__ . '/../models/contactModel.php';


class ContactController
{
    private static $ContactModel = ContactModel::class;

    public static function renderView($view, $data = [])
    {   
        include __DIR__ . "/../views/{$view}";
    }

    public static function index()
    {
        self::renderView('index.php');
    }

    public static function getRequest()
    {
        $request = json_decode(file_get_contents('php://input'), true);

        $date = explode('/', $request['dataNascimento']);
        $request['dataNascimento'] = "{$date[2]}-{$date[1]}-{$date[0]}";
        $request['receberWhatsapp'] = $request['receberWhatsapp'] ? 1 : 0;
        $request['receberSms'] = $request['receberSms'] ? 1 : 0;
        $request['receberEmail'] = $request['receberEmail'] ? 1 : 0;

        self::$ContactModel::fillClass($request);
    }

    public static function create()
    {
        self::getRequest();

        self::$ContactModel::createContact();
    }

    public static function getContacts()
    {
        $contatos = self::$ContactModel::getAllContacts();
        echo self::renderView('contacts.php', $contatos);
    }

    public static function getContactUpdateForm(){
        $contactParam = $_GET['contact'];

        $contact = self::$ContactModel::getContactById($contactParam);
        self::renderView('edit.php', $contact);
    }

    public static function update(){
        $contactParam = $_GET['contact'];
        self::getRequest();

        self::$ContactModel::updateContact($contactParam);
    }

    public static function delete(){
        $contactParam = $_GET['contact'];
        self::getRequest();

        self::$ContactModel::deleteContactById($contactParam);
    }
}
