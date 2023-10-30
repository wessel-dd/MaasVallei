<?php

include_once("../includes/connect.php");

if (isset($_POST["submit"])) {
    $checkSql = "SELECT * FROM klant WHERE Username = :Username";
    $checkStmt = $connect->prepare($checkSql);
    $checkStmt->bindParam(":Username", $_POST['Username']);
    $checkStmt->execute();
    $existingUser = $checkStmt->fetch();

    if ($existingUser) {
        header("Location: http://localhost/MaasVallei/register.php");
        exit();
    } else {
        $sql = "INSERT INTO klant (Naam, Contactgegevens, Username, Password) VALUES (:Naam, :Contactgegevens, :Username, :Password)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":Naam", $_POST['Naam']);
        $stmt->bindParam(":Contactgegevens", $_POST['Contactgegevens']);
        $stmt->bindParam(":Username", $_POST['Username']);
        $stmt->bindParam(":Password", $_POST['Password']);
        $stmt->execute();
        
        header("Location: http://localhost/MaasVallei/klant/index.php");
        exit();
    }
}
