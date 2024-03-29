<?php
session_start();
include './model/pdo.php';
include './model/danhmuc.php';
include './model/canho.php';
$allhome = loadall_dm();
include './view/header.php';
include './model/taikhoan.php';
include './model/home_buy.php';

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
                    $yourURL = "index.php?home=login";
                    echo ("<script>location.href = ' $yourURL '</script>");
                }
            }
            include './view/login.php';
            break;

        case 'home_same':
            if (isset($_POST['kyw']) && ($_POST['kyw']) != '') {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 1) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $home_same = loadall_home($kyw = '', $iddm);
            include './view/home_same.php';
            break;
        case 'resign_tk':
            if (isset($_POST['resign']) && ($_POST['resign'])) {
                $name = $_POST['name'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                if (check_user_agin($email) == '') {
                    insert_tk($username, $pass, $email, $name);
                    include './view/login.php';
                } else {
                    $thongbao = 'Email đã tồn tại';
                }
            }
            include './view/resign.php';
            break;
        case 'detail':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = ($_GET['id']);
                $onehouse = loadone_ch($id);
                (extract($onehouse));
                $same_home = home_same_home($id, $iddm);
                include './view/detail.php';
            } else {
                include './view/home.php';
            }
            break;
        case 'tuvan':
            if (isset($_POST['nhan']) && ($_POST['id'])) {
                $id = $_POST['id'];
                $onehouse = loadone_home($id);
            }
            include './view/tuvan.php';
            break;
        case 'get_tuvan':
            if (isset($_POST['nhan']) && ($_POST['nhan'])) {
                $id_user = $_POST['id_user'];
                $id_home = $_POST['id_home'];
                $tinhtrang = 1;
                $ngaytuvan = $_POST['ngaytuvan'];
                $nhanvien = 1;
                buy_house($id_user, $id_home, $tinhtrang, $nhanvien,$ngaytuvan);
            }
            $listkh = load_home_kh($id);
            include './view/chucmung.php';
            break;

        case 'account':
            include './view/account.php';
            break;
        case 'my_house':
            if (isset($_SESSION['user']) && ($_SESSION['user'])) {
                $id = $_SESSION['user']['id'];
                $listkh = load_home_kh($id);
            }
            $listSt = load_status();
            include './view/chucmung.php';
            break;
        case 'ct_one_house':
            if (isset($_SESSION['user'])) {
                $id = $_SESSION['user']['id'];  
                $onehome = load_one_home_kh($id);
                extract($onehome);
            }
            $list_nhanvien = load_nv();
            include './view/chitiet.php';
            break;
        case 'change_tt':
            if (isset($_POST['change']) && ($_GET['id'])) {
                $id = $_GET['id'];
                $date = $_POST['date'];
                $nhanvien = $_POST['nhanvien'];
                $ghichu = $_POST['ghichu'];
                change_time($id, $date,$nhanvien,$ghichu);
            }
            $listkh = load_home_kh($id);
            include './view/chucmung.php';
            break;
        case 'change_account':
            if (isset($_POST['change']) && ($_GET['id'])) {
                $id = $_GET['id'];
                $tk = $_POST['username'];
                $mk = $_POST['pass'];
                $email = $_POST['email'];
                $sdt = $_POST['phone'];
                $dc = $_POST['address'];
                $name = $_POST['name'];
                $chucvu = 1;
                update_tk($id, $tk, $mk, $email, $sdt, $dc, $name, $chucvu);
            }
            include './view/change_account.php';
            break;
        case 'logout':
            session_unset();
            $yourURL = "index.php";
            echo ("<script>location.href = ' $yourURL '</script>");
            break;
        default:
            include './view/home.php';
    }

} else {
    include './view/home.php';
}
include './view/footer.php';

?>