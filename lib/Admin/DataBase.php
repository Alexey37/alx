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
            $this->connection = new \PDO(
                static::DSN,
                static::USER_NAME,
                static::PASS
            );
        } catch (\Exception $exception) {
            dump($exception->getMessage());
        }
    }

    public function getAdminPasswords()
    {
        try {
            $sqlQuery = 'SELECT password FROM user WHERE role="adm"';
            $dbResult = $this->connection->query($sqlQuery);
            return $dbResult->fetchAll( \PDO::FETCH_ASSOC);
        } catch (\Exception $exception) {

        }
    }

    public function getOldNames()
    {
        try {
            $sqlQuery = 'SELECT * FROM old_names'; //выбрать все данные из указанной таблицы
            $dbResult = $this->connection->query($sqlQuery); //query для получения данных
            return $dbResult->fetchAll( \PDO::FETCH_ASSOC); //выводит массив
        } catch (\Exception $exception) {

        }
    }

    public function getAchievements()
    {
        try {
            $sqlQuery = 'SELECT * FROM achievements'; //выбрать все данные из указанной таблицы
            $dbResult = $this->connection->query($sqlQuery); //query для получения данных
            return $dbResult->fetchAll( \PDO::FETCH_ASSOC); //выводит массив
        } catch (\Exception $exception) {

        }
    }

    public function getGamesCalendar()
    {
        try {
            $sqlQuery = 'SELECT name, score, logo, game_date FROM games_calendar WHERE score = "-- : --"';
                            //выбрать нужные данные из указанной таблицы, где счёт = -- : --
            $dbResult = $this->connection->query($sqlQuery); //query для получения данных
            return $dbResult->fetchAll( \PDO::FETCH_ASSOC); //выводит массив
        } catch (\Exception $exception) {

        }
    }

    public function getGamesResults()
    {
        try {
            $sqlQuery = 'SELECT name, score, logo, game_date FROM games_calendar WHERE score != "-- : --"'; //выбрать данные только из указанных столбцов из указанной таблицы
            $dbResult = $this->connection->query($sqlQuery); //query для получения данных
            return $dbResult->fetchAll( \PDO::FETCH_ASSOC); //выводит массив
        } catch (\Exception $exception) {

        }
    }

    public function setGamesCalendar (array $opponent)
    {
    $sql ='';
    foreach ($opponent as $key => $value)
        {
            $sql += sprintf( '(%s,%s,%s,%s)', $value['name'], $value['score'], $value['logo'], $value['game_date']);
        }

        $sqlQuery = 'INSERT INTO games_calendar (name, score, logo, game_date) VALUES (????)';
    }


}