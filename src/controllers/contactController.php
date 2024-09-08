<?php
require __DIR__ . '/../models/contactModel.php';


class ContactController
{
    private static $ContactModel = ContactModel::class;

    public static function renderView($view, $data = [])
    {   
        include __DIR__ . "/../views/{$view}";
    }
}
