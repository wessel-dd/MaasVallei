<?php

include_once ('../includes/connect.php');

if (isset($_POST["submit"])) {

    $sql = "SELECT Username FROM klant WHERE Username = :Username AND Password = :Password";  
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":Username", $_POST['Username']);
    $stmt->bindParam(":Password", $_POST['Password']);
    $stmt->execute();
    $result = $stmt->fetch();

    if ($result === false) {
        header("Location: http://localhost/MaasVallei/login.php");
    } else {
        header("Location: http://localhost/MaasVallei/klant/index.php");
        exit();
    }    
  }
?>