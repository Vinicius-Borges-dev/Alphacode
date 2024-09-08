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

    public static function createContact(){
        $sql = 'INSERT INTO '.self::$table.' (nome, email, telefone, dataNascimento, profissao, celular, receberWhatsapp, receberSms, receberEmail) VALUES (?,?,?,?,?,?,?,?,?)';
        $response = self::$conn::sqlQuery($sql, [self::$nome, self::$email, self::$telefone, self::$dataNascimento, self::$profissao, self::$celular, self::$receberWhatsapp, self::$receberSms, self::$receberEmail]);

        if ($response->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public static function getAllContacts(){
        $sql = 'SELECT * FROM '.self::$table;
        return self::$conn::sqlQuery($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function getContactById($id){
        $sql = 'SELECT * FROM '.self::$table.' WHERE id=?';
        return self::$conn::sqlQuery($sql, [$id])->fetchAll(PDO::FETCH_ASSOC)[0];
    }

    public static function updateContact($id){
        $sql = 'UPDATE '.self::$table.' SET nome=?, email=?, telefone=?, dataNascimento=?, profissao=?, celular=?, receberWhatsapp=?, receberSms=?, receberEmail=? WHERE id=?';
        $response = self::$conn::sqlQuery($sql, [self::$nome, self::$email, self::$telefone, self::$dataNascimento, self::$profissao, self::$celular, self::$receberWhatsapp, self::$receberSms, self::$receberEmail, $id]);

        if ($response->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }


    public static function deleteContactById($id){
        $sql = 'DELETE FROM '.self::$table.' WHERE id=?';
        $response = self::$conn::sqlQuery($sql, [$id]);

        if ($response->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }

}
