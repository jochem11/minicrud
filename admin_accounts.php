<?php

include("connect.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE accounts SET naam = :naam, wachtwoord = :wachtwoord WHERE ID = :ID";

    $stmt = $connect->prepare($sql);

    $stmt->bindParam(":ID", $_POST['ID']);

    $stmt->bindParam(":naam", $_POST['naam']);

    $stmt->bindParam(":wachtwoord", $_POST['wachtwoord']);

    $stmt->execute();

    header("Location: admin.php");
};
if (isset($_POST['delete'])) {

    $sql = "DELETE FROM accounts WHERE ID = :ID";

    $stmt = $connect->prepare($sql);

    $stmt->bindParam(":ID", $_POST['ID']);

    $stmt->execute();

    header("Location: admin.php");
}