<?php

class ConnectDb 
{

    public static function connect($config) 
    {
        try {
            // return new PDO('mysql:host=127.0.0.1:3306;dbname=php_teach;charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));   
        
            return new PDO(
                $config['connection'].';dbname='.$config['name'].';charset='.$config['charset'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}


?>