<?php
    $msg = '';

    if (isset($_POST['submit']) && !empty($_POST['naam']) && !empty($_POST['pw'])) {
        if ($_POST['naam'] == 'admin' &&
        $_POST['pw'] == 'admin') {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = 'admin';

            header("Location: admin.php");
        } else {
            $msg = 'wtf u doin??';
        }
        
    }
?>