<?php

include("connect.php");

if (isset($_POST['update'])) {
    $sql = "UPDATE contact SET naam = :naam, eMail = :eMail, bericht = :bericht WHERE ID = :ID";

    $stmt = $connect->prepare($sql);

    $stmt->bindParam(":ID", $_POST['ID']);

    $stmt->bindParam(":naam", $_POST['naam']);

    $stmt->bindParam(":eMail", $_POST['eMail']);

    $stmt->bindParam(":bericht", $_POST['bericht']);

    $stmt->execute();

    header("Location: admin.php");
};
if (isset($_POST['delete'])) {

    $sql = "DELETE FROM contact WHERE ID = :ID";

    $stmt = $connect->prepare($sql);

    $stmt->bindParam(":ID", $_POST['ID']);

    $stmt->execute();

    header("Location: admin.php");
}