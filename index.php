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
                    $yourURL = "index.php?home=login";
                    echo ("<script>location.href = ' $yourURL '</script>");
                }
            }
            include './view/login.php';
            break;

        case 'home_same':
            if (isset($_POST['kyw']) && ($_POST['kyw']) !='') {
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
                if(check_user_agin($email)==''){
                    insert_tk($username, $pass, $email, $name);
                    include './view/login.php';
                }
                else{
                    $thongbao='Email đã tồn tại';
                }
            }
            include './view/resign.php';
            break;
        case 'detail':
            if(isset($_GET['id'])&&($_GET['id'])){
                $id = ($_GET['id']);
                $onehouse = loadone_ch($id);
                (extract($onehouse));
                $same_home =home_same_home($id, $iddm);
                include './view/detail.php';
            }else {
                include './view/home.php';
            }
            break;  
        case 'tuvan':
            if(isset($_POST['nhan'])&&($_POST['id'])){
                $id=$_POST['id'];
                $onehouse = loadone_home($id);
            }
            include './view/tuvan.php';
            break;  
        case 'get_tuvan':
            if(isset($_POST['nhan'])&&($_POST['nhan'])){
                $name = $_POST['name'];
                $diachi = $_POST['address'];
                $email = $_POST['email'];
                $sdt = $_POST['phone'];
                $id = $_POST['id_home'];
                $vitri =$_POST['vitri_home'];
            }
            break;      
        case 'account':
            include './view/account.php';
            break;  
        case 'change_account':
            if(isset($_POST['change'])&&($_GET['id'])){
                $id = $_GET['id'];
                $tk = $_POST['username'];
                $mk = $_POST['pass'];
                $email = $_POST['email'];
                $sdt = $_POST['phone'];
                $dc = $_POST['address'];
                $name = $_POST['name'];
                $chucvu =1;
                update_tk($id,$tk,$mk,$email,$sdt,$dc,$name,$chucvu);
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