<?php

class Config{
    public static function getConn()
    {
       
$servername = "209.205.214.18";
$password = "Wallet@connect";
$username = "mywallet_walletconnect";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=mywallet_connect", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $conn;
        } catch (PDOException $e) {
           die($e);
        }

    }

}

?>