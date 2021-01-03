<?php

namespace App\Admin;


class DataBase {

    const DSN = 'mysql:host=localhost;dbname=arashi5_alex';
    const USER_NAME ='arashi5_alex';
    const PASS = 'Takoro923';

    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO(
                static::DSN,
                static::USER_NAME,
                static::PASS
            );
        } catch (Exception $exception) {
            dump($exception->getMessage());
        }
    }

    public function getAdminPasswords()
    {
        try {
            $sqlQuery = 'SELECT password FROM user WHERE role="adm"';
            $dbResult = $this->connection->query($sqlQuery);
            return $dbResult->fetchAll( \PDO::FETCH_ASSOC);
        } catch (Exception $exception) {

        }
    }
}