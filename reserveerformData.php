<?php

include("connect.php");

$sql = "INSERT INTO reserveringen (naam, aantal, telefoonnummer, bericht, datum, tafel) VALUES (:naam,:aantal, :tel, :bericht, :date, :dataid)";

$stmt = $connect->prepare($sql);

$stmt->bindParam(":naam", $_POST['naam']);

$stmt->bindParam(":aantal", $_POST['aantal']);

$stmt->bindParam(":tel", $_POST['tel']);

$stmt->bindParam(":bericht", $_POST['bericht']);

$stmt->bindParam(":date", $_POST['date']);

$stmt->bindParam(":dataid", $_POST['dataid']);

$stmt->execute();
