<?php
session_start();
include './model/pdo.php';
include './model/danhmuc.php';
include './model/canho.php';
$allhome = loadall_dm();
include './view/header.php';
include './model/taikhoan.php';

$fullhouse = loadall_ch();
if (isset($_GET['home']) && ($_GET['home'])) {
    $home = $_GET['home'];
    switch ($home) {
        case 'login':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $checkuser = check_user($email, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    $yourURL = "index.php";
                    echo ("<script>location.href =' $yourURL '</script>");
                } else {
                    $thongbao = "Không tìm thấy tài khoản";
                    $yourURL = "index.php";
                    echo ("<script>location.href = ' $yourURL '</script>");
                }

            }
            include './view/login.php';
            break;
        case 'resign_tk':
            if (isset($_POST['resign']) && ($_POST['resign'])) {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                insert_tk($username,$pass,$email,$name);
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