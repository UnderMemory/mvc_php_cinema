<?php 

namespace system;

class MyPDO{

    static $dbh;
    static $dsn = 'mysql:host=localhost;dbname=db_cinema;charset=UTF8';
    static $user = 'root';
    static $pwd = '';

    /**
     * Cette méthode permet à l'éxécution de : 
     * - Soit récupérer l'instance de PDO et pouvoir ensuite l'utiliser pour des requètes
     * - Soit crée l'instance avec la connection au serveur MySQL
     *
     * "@"return void
     */
    public static function connect()
    {

        if(!self::getInstance())
        {

        }
        try
        {
            self::$dbh = new \PDO(self::$dsn, self::$user, self::$pwd);
        }
        catch(\PDOException $e)
        {
            exit("Erreur de connexion au serveur de Base de données");
        }

        return self::getInstance();

    }

    /**
     * Retourner une instance unique de PDO
     * "@"return void
     */
    private static function getInstance(){

        return self::$dbh;

    }

}