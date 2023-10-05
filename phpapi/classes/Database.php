<?php

class Database {
    private $db_host = 'localhost';
    private $db_name = 'phpapi';
    private $db_username = 'root';
    private $db_password = 'senac';

    function_construct(){

        try{
            $dsn = "mysql:host={$this->db_host};dbname={$this->db_name};charset=utf8";
            $db_connection = new PDO($dsn, $this->db_username, $this->db_password);
            $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db_connection
        }cath(PDOException $e){
            echo "Erro de conexão".$e->getMessage();
            exit;
        }
    }
}