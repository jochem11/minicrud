<?php

include("connect.php");

$sql = "INSERT INTO accounts (naam, wachtwoord) VALUES (:naam,:ww)";

$stmt = $connect->prepare($sql);

$stmt->bindParam(":naam", $_POST['naam']);

$stmt->bindParam(":ww", $_POST['ww']);

$stmt->execute();

header("location: admin.php");
