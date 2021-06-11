<?php
    //class that does not need to be instantiated, so abstracted
    abstract class ConnexionModel{
        const HOST = "localhost";
        const NAME = "banque_php";
        const LOGIN = "root";
        const PASSWORD = "";

        static public function getDB() {
            try {
                $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::NAME , self::LOGIN , self::PASSWORD);
                return $db;
            } catch (Exception $e) {
                exit($e->getMessage());
            }
        }
    }
?>