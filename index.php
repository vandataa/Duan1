<?php
include './model/danhmuc.php';
include './model/canho.php';
// $allhome = loadall_dm();
// $fullhouse = loadall_ch();
include './view/header.php';
include './model/taikhoan.php';

if (isset($_GET['home']) && ($_GET['home'])) {
    $home = $_GET['home'];
    switch ($home) {
        case 'login':
            include './view/login.php';
            break;
        case 'resign_tk':
            if (isset($_POST['resign']) && ($_POST['resign'])) {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                insert_tk($name, $username, $email, $pass);
            }
            include './view/resign.php';
            break;
        default:
            include './view/home.php';
    }

} else {

    include './view/home.php';
}
include './view/footer.php';

?>