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
}
