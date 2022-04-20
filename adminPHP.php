<?php
    include_once("connect.php");

    $query = "SELECT * FROM accounts";
    $stmt = $connect->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $account) {

          $msg = '';

        if (isset($_POST['submit']) && !empty($_POST['naam']) && !empty($_POST['pw'])) {
            if ($_POST['naam'] == $account['naam'] &&
            $_POST['pw'] == $account['wachtwoord']) {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'admin';

                header("Location: admin.php");
            } else {
                $msg = 'wtf u doin??';;
                header("Location: index.php");
            }
        
        }
    }
?>