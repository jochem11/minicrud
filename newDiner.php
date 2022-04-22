<?php

include("connect.php");

$sql = "INSERT INTO dinergerechten (naam, plaatje, prijs, beschrijving) VALUES (:naam,:plaatje,:prijs, :beschrijving)";

$stmt = $connect->prepare($sql);

$stmt->bindParam(":naam", $_POST['naam']);

$stmt->bindParam(":plaatje", $_POST['plaatje']);

$stmt->bindParam(":prijs", $_POST['prijs']);

$stmt->bindParam(":beschrijving", $_POST['beschrijving']);

$stmt->execute();

header("location: admin.php");
