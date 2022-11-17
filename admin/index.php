<?php
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/canho.php';
include '../model/taikhoan.php';
include 'header.php';


if (isset($_GET['build']) && ($_GET['build'])) {
    $build = $_GET['build'];
    switch ($build) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tendanhmuc = $_POST['adddanhmuc'];
                insert_dm($tendanhmuc);
                $thongbao = "Thêm Thành công";
            }
            include 'danhmuc/adddm.php';
            break;
        case 'ldm':
            $listdm = loadall_dm();
            include 'danhmuc/list.php';
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_dm($_GET['id']);
            }
            $listdm = loadall_dm();
            include 'danhmuc/list.php';
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $dm = loadone_dm(($_GET['id']));
            }
            include './danhmuc/update.php';
            break;
        case 'update_dm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tendanhmuc = $_POST['adddanhmuc'];
                $id = $_POST['id'];
                update_dm($id, $tendanhmuc);
                $thongbao = "Cập nhật Thành công";
            }

            $listdm = loadall_dm();
            include 'danhmuc/list.php';
            break;
        case 'addhome':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $vitri = $_POST['vitri'];
                $niemyet = $_POST['niemyet'];
                $trangthai = $_POST['tinhtrang'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                $video = $_POST['video'];
                $mota = $_POST['mota'];
                insert_ch($iddm, $vitri, $niemyet, $hinh, $video, $mota, $trangthai);
                $thongbao = 'Thêm thành công';
            }
            $listst = loadall_status();
            $listdm = loadall_dm();
            include 'canho/addch.php';
            break;
        case 'lch':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $iddm = $_POST['iddm'];
            } else {
                $iddm = 0;
            }
            $listdm = loadall_dm();
            $listch = loadall_ch_cungloai($iddm);
            include './canho/list.php';
            break;
        case 'xoach':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_ch($_GET['id']);
            }
            $listdm = loadall_dm();
            $listch = loadall_ch_cungloai($iddm = 0);
            include './canho/list.php';
            break;
        case 'suach':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $home = loadone_ch($_GET['id']);
            }
            $listst = loadall_status();
            $listdm = loadall_dm();
            include './canho/update.php';
            break;

        case 'update_home':
            if (isset($_POST['update']) && ($_GET['id'])) {
                $id = $_GET['id'];
                $iddm = $_POST['iddm'];
                $vitri = $_POST['vitri'];
                $niemyet = $_POST['niemyet'];
                $trangthai = $_POST['tinhtrang'];
                $video = $_POST['video'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                $mota = $_POST['mota'];
                update_ch($id, $iddm, $vitri, $niemyet, $video, $hinh, $mota, $trangthai);
                $thongbao = 'Cập nhật thành công';
            }
            $listch = loadall_ch_cungloai($iddm = 0);
            $listst = loadall_status();
            $listdm = loadall_dm();
            include 'canho/list.php';
            break;
        case 'tk':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tk = $_POST['acount'];
                $mk = $_POST['pass'];
                $email = $_POST['email'];
                $sdt = $_POST['phone'];
                $dc = $_POST['address'];
                $name = $_POST['name'];
                $chucvu = $_POST['chucvu'];
                insert_nv($tk, $mk, $email, $sdt, $dc, $name, $chucvu);
                $thongbao = "Thêm mới thành công";
            }
            $listcv = load_cv();
            include 'taikhoan/add.php';
            break;
        case 'ltk':
            if (isset($_POST['ok']) && ($_POST['ok'])) {
                $chucvu = $_POST['chucvu'];
            } else {
                $chucvu = 0;
            }
            $listnv = load_cv();
            $listtk = loadall_nv_cungcap($chucvu);
            include './taikhoan/list.php';
            break;
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $tk = loadone_tk($_GET['id']);
            }
            $listcv = load_cv();
            include './taikhoan/update.php';
            break;
        case 'update_tk':
            if (isset($_POST['update']) && ($_GET['id'])) {
                $id = $_GET['id'];
                $tk = $_POST['acount'];
                $mk = $_POST['pass'];
                $email = $_POST['email'];
                $sdt = $_POST['phone'];
                $dc = $_POST['address'];
                $name = $_POST['name'];
                $chucvu = $_POST['chucvu'];
                update_tk($id,$tk,$mk,$email,$sdt,$dc,$name,$chucvu);
                $thongbao = "update  thành công";
            }
            
            $listcv = loadall_nv_cungcap($chucvu = 0);
            include 'taikhoan/list.php';
            break;
        default:
            include 'home.php';
            break;
    }

}
include 'home.php';
include 'footer.php';
?>