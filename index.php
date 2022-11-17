<?php
include './view/header.php';
if (isset($_GET['home']) && ($_GET['home'])) {
    $home = $_GET['home'];
    switch ($home) {
        case 'login':
            include './view/login.php';
        break;

    }

}
include './view/body.php';
include './view/footer.php';
?>