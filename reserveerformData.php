<?php

include("connect.php");

global $conn;

if (isset($_POST['submit'])) {
    $name = $_POST['naam'];
    $mensen = $_POST['aantal'];
    $telefoonnumber = $_POST['tel'];
    $text = $_POST['bericht'];
    $datetime = $_POST['date'];
    $tafel = $_POST['data-id'];
    if ($name == '' || $mensen == '') {
        $error = '';
    } else {
        if (is_numeric($mensen)) {
            if ($mensen > 20 || $mensen <= 0) {
                $error = "";
            } else {
                $error = "Reservering geplaats";
                $sql = "INSERT INTO reserveringen (naam, aantal, telefoonnummer, bericht, datum, tafel) VALUES ('$name', '$mensen', '$telefoonnumber', '$mensen', '$text', '$datetime', '$tafel')";
                $conn->exec($sql);
            }
        } else {
            $error = '';
        }
    }
}


