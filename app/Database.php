<?php
session_start();
class Database
{

    public static function get_contry()
    {
        $user_ip = getenv('REMOTE_ADDR');
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $country = $geo["geoplugin_countryName"];
        $city = $geo["geoplugin_city"];
        return $country;

    }

    public static function getConn()
    {
        // $url = "https://www.blockonomics.co/api/";
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=mr_david", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $conn;
        } catch (PDOException $e) {
            echo json_encode(array("message" => $e->getMessage(), "code" => "404"));
        }

    }


    public static function is_login()
    {

        if (isset($_SESSION["USER"]) and !empty($_SESSION["USER"])) {
            return true;
        }
        return false;
    }

    public static function register($data){
        $conn=Self::getConn();
        $q="INSERT INTO `client`(`Name`, `Email`, `Password`, `Uid`) VALUES (:n,:e,:p,:u)";
        $stm=$conn->prepare($q);
       echo $stm->execute($data);

    }


}
