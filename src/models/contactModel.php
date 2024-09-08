<?php
require __DIR__ . '/../configs/database.php';

class ContactModel
{
    private static $table = 'contatos';
    private static $conn = Database::class;
    public static $nome;
    public static $email;
    public static $telefone;
    public static $dataNascimento;
    public static $profissao;
    public static $celular;
    public static $receberWhatsapp;
    public static $receberSms;
    public static $receberEmail;

}
