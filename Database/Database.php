<?php
class Database {
    static public function connection(){
        try{
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "wdevel";
            
            $conection = new PDO('mysql:host=' . $host .  ';dbname=' . $dbname, $username, $password, array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                )
            ); 

            $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conection;                
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
}