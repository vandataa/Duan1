<?php
function insert_ch($iddm,$vitri,$niemyet,$hinh,$mota,$trangthai){
    $sql = "INSERT INTO `canho`(`iddm`,`vitri`,`niemyet`,`hinh`,`mota`,`tinhtrang`) value ('$iddm','$vitri','$niemyet','$hinh','$mota','$trangthai')";
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
    $sql = "SELECT * FROM `tinhtrang`";
    $listst = pdo_query($sql);
    return $listst;
}
function delete_ch($id)
{
    $sql = "DELETE FROM `canho` WHERE id = " . $_GET['id'];
    pdo_execute($sql);
}
?>