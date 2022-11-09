<?php
include '../model/pdo.php';
include '../model/danhmuc.php';
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

        default:
            include 'home.php';
            break;
    }

}
include 'home.php';
include 'footer.php';
?>