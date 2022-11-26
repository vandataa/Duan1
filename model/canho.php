<?php
function insert_ch($iddm,$vitri,$niemyet,$hinh,$video,$mota,$trangthai){
    $sql = "INSERT INTO `canho`(`iddm`,`vitri`,`niemyet`,`hinh`,`video`,`mota`,`tinhtrang`) value ('$iddm','$vitri','$niemyet','$hinh','$video','$mota','$trangthai')";
    pdo_execute($sql);
}


function loadall_ch(){
    $sql = "SELECT * FROM `canho`";
    $listsch = pdo_query($sql);
    return $listsch;
}
function loadone_ch($id){
    $sql = "SELECT * FROM `canho` WHERE id = ".$_GET['id'];
    $ch = pdo_query_one($sql);
    return $ch;
}
function loadone_home($id){
    $sql = "SELECT * FROM `canho` WHERE id = ".$id;
    $ch = pdo_query_one($sql);
    return $ch;
}
function loadone_home_buy($idsp){
    $sql = "SELECT * FROM `canho` WHERE id = ".$idsp;
    $ch = pdo_query_one($sql);
    return $ch;
}
function loadall_home($kyw = '', $iddm)
{
    $sql = "SELECT * FROM `canho` where 1 ";
    if ($kyw != '') {
        $sql .= " and vitri like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= "order by id desc";
    $listch = pdo_query($sql);
    return $listch;
}
function home_same_home($id, $iddm)
{
    $sql = " SELECT * from  canho WHERE iddm = " . $iddm . " AND id <>" . $id;
    $listhm = pdo_query($sql);
    return $listhm;
}
function update_ch($id,$iddm, $vitri, $niemyet, $hinh,$video, $mota, $trangthai){
    if ($hinh !="") {
        $sql = "UPDATE `canho` set `vitri` = '" .$vitri. "', `niemyet` = '" .$niemyet. "',`hinh` ='" .$hinh. "',`video`='".$video."',`mota` = '" .$mota. "', `iddm` = '" . $iddm . "',`tinhtrang`='".$trangthai."' WHERE `canho`.`id` = '{$id}'" ;
    }
    else {
        $sql = "UPDATE `canho` set `vitri` = '" .$vitri. "', `niemyet` = '" .$niemyet. "',`video`='".$video."',`mota` = '" .$mota. "', `iddm` = '" . $iddm . "',`tinhtrang`='".$trangthai."' WHERE `canho`.`id` = '{$id}'" ;
    }
    pdo_execute($sql);
}
function loadall_ch_cungloai($iddm)
{   
    $sql = "SELECT * FROM `canho` where 1 ";
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_status(){
    $sql = "SELECT * FROM `tinhtrang_home`";
    $listst = pdo_query($sql);
    return $listst;
}
function delete_ch($id)
{
    $sql = "DELETE FROM `canho` WHERE id = " . $_GET['id'];
    pdo_execute($sql);
}
function loadall_status_join(){
    $sql = "SELECT * FROM `canho` inner join `tinhtang` on `canho`.`tinhtrang`=`tinhtrang`.`id`";
    $listst = pdo_query($sql);
    return $listst;
}
?>