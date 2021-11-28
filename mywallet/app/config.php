<?php

class Config{
    public static function getConn()
    {
        // $url = "https://www.blockonomics.co/api/";
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
$servername = "localhost";
$db = "u525665280_aloe";
$password = "Aloe@ecom1.com";
$username = "u525665280_aloe";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=u525665280_aloe", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $conn;
        } catch (PDOException $e) {
            echo json_encode(array("message" => $e->getMessage(), "code" => "404"));
        }

    }

}

?>