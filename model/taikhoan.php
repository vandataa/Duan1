<?php
function insert_nv($tk,$mk,$email,$sdt,$dc,$name,$chucvu){
    $sql = "INSERT INTO `taikhoan`(`taikhoan`,`matkhau`,`email`,`sdt`,`diachi`,`hoten`,`chucvu`) value ('$tk','$mk','$email','$sdt','$dc','$name','$chucvu')";
    pdo_execute($sql);
}
function insert_nv1($tk,$mk,$email,$sdt,$dc,$name,$chucvu){
    $sql = "INSERT INTO `nhanvien`(`hoten`,`tendangnhap`,`matkhau`,`email`,`diachi`,`sdt`,`chucvu`) value ('$name','$tk','$mk','$email','$sdt','$dc','$chucvu')";
    pdo_execute($sql);
}
function 
insert_tk($username,$pass,$email,$name){
    $sql = "INSERT INTO `taikhoan`(`taikhoan`,`matkhau`,`email`,`hoten`)value ('$username','$pass','$email','$name')";
    pdo_execute($sql);
}
function check_user($email, $pass){
    $sql = "SELECT * FROM `taikhoan` WHERE email='".$email."' AND matkhau= '".$pass."'";
    $tk = pdo_query_one($sql);
    return $tk;
}
function check_user_agin($email){
    $sql = "SELECT * FROM `taikhoan` WHERE email='".$email."'";
    $tk = pdo_query_one($sql);
    return $tk;   
}
function load_cv(){
    $sql = "SELECT * FROM `chucvu`";
    $listcv = pdo_query($sql);
    return $listcv;
}
function loadall_nv_cungcap($chucvu)
{   
    $sql = "SELECT * FROM `taikhoan` where 1 ";
    if ($chucvu > 0) {
        $sql .= " and chucvu ='" . $chucvu . "'";
    }
    $listcv = pdo_query($sql);
    return $listcv;
}
function loadone_tk($id){
    $sql = "SELECT * FROM `taikhoan` WHERE id = ".$_GET['id'];
    $tk = pdo_query_one($sql);
    return $tk;
}
function loadone_tk_buy($idkh){
    $sql = "SELECT * FROM `taikhoan` WHERE id = ".$idkh;
    $tk = pdo_query_one($sql);
    return $tk;
}
function update_tk($id,$tk,$mk,$email,$sdt,$dc,$name,$chucvu){
    $sql = "UPDATE `taikhoan` set `taikhoan`='".$tk."',`matkhau`='".$mk."',`email`='".$email."',`sdt`='".$sdt."',`diachi`='".$dc."',`hoten`='".$name."',`chucvu`='".$chucvu."' where `taikhoan`.`id`=".$id;
    pdo_execute($sql);
}
function update_tk1($id,$tk,$mk,$email,$sdt,$dc,$name,$chucvu){
    $sql = "UPDATE `nhanvien` set `taikhoan`='".$tk."',`matkhau`='".$mk."',`email`='".$email."',`sdt`='".$sdt."',`diachi`='".$dc."',`tennhanvien`='".$name."',`chucvu`='".$chucvu."' where `taikhoan`.`id`=".$id;
    pdo_execute($sql);
}
function load_all_kh(){
    $sql = "SELECT * FROM `khachhang` where 1 ";
    // if ($nhanvien > 0) {
    //     $sql .= " and taikhoan ='" . $nhanvien . "'";
    //     $sql .= " and chucvu ='" . $chucvu . "'";
    // }
    $listnv = pdo_query($sql);
    return $listnv;
}
?>