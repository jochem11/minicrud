<?php

include("connect.php");

$sql = "INSERT INTO contact (naam, eMail, bericht) VALUES (:naam,:eMail,:bericht)";

$stmt = $connect->prepare($sql);

$stmt->bindParam(":naam", $_POST['naam']);

$stmt->bindParam(":eMail", $_POST['eMail']);

$stmt->bindParam(":bericht", $_POST['bericht']);

$stmt->execute();

if (isset($_POST['admin'])) {
    header("location: admin.php");
} else {
header("Location: index.php");
}
