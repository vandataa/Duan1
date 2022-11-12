<?php
include '../model/pdo.php';
include '../model/danhmuc.php';
include '../model/canho.php';
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
                $mota = $_POST['mota'];
                insert_ch($iddm, $vitri, $niemyet, $hinh, $mota, $trangthai);
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
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                $mota = $_POST['mota'];
                update_ch($id,$iddm, $vitri, $niemyet, $hinh, $mota, $trangthai);
                $thongbao = 'Cập nhật thành công';
            }
            $listch = loadall_ch_cungloai($iddm = 0);
            $listst = loadall_status();
            $listdm = loadall_dm();
            include 'canho/list.php';
            break;    
        default:
            include 'home.php';
            break;
    }

}
include 'home.php';
include 'footer.php';
?>