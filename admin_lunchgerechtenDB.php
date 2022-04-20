<?php

include("connect.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE lunchgerechten SET naam = :naam, plaatje = :plaatje, prijs = :prijs, beschrijving = :beschrijving WHERE ID = :ID";

    $stmt = $connect->prepare($sql);

    $stmt->bindParam(":ID", $_POST['ID']);

    $stmt->bindParam(":naam", $_POST['naam']);

    $stmt->bindParam(":plaatje", $_POST['plaatje']);

    $stmt->bindParam(":prijs", $_POST['prijs']);

    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);

    $stmt->execute();

    header("Location: admin.php");
};
if (isset($_POST['delete'])) {

    $sql = "DELETE FROM lunchgerechten WHERE ID = :ID";

    $stmt = $connect->prepare($sql);

    $stmt->bindParam(":ID", $_POST['ID']);

    $stmt->execute();

    header("Location: admin.php");
}