<?php

include("connect.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE reserveringen SET naam = :naam, aantal = :aantal, telefoonnummer = :tel, bericht = :bericht, datum = :datum, tafel = :tafel WHERE ID = :ID";

    $stmt = $connect->prepare($sql);

    $stmt->bindParam(":ID", $_POST['ID']);

    $stmt->bindParam(":naam", $_POST['naam']);

    $stmt->bindParam(":aantal", $_POST['aantal']);


    $stmt->bindParam(":tel", $_POST['tel']);

    $stmt->bindParam(":bericht", $_POST['bericht']);

    $stmt->bindParam(":datum", $_POST['datum']);

    $stmt->bindParam(":tafel", $_POST['tafel']);

    $stmt->execute();

    header("Location: admin.php");
};

if (isset($_POST['delete'])) {

    $sql = "DELETE FROM reserveringen WHERE ID = :ID";

    $stmt = $connect->prepare($sql);

    $stmt->bindParam(":ID", $_POST['ID']);

    $stmt->execute();

    header("Location: admin.php");
}