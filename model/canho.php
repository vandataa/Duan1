<?php
function insert_ch($iddm,$vitri,$niemyet,$hinh,$mota){
    $sql = "INSERT INTO `canho`(`iddm`,`vitri`,`niemyet`,`hinh`,`mota`) value ('$iddm','$vitri','$niemyet','$hinh','$mota')";
    pdo_execute($sql);
}

function loadall_ch(){
    $sql = "SELECT * FROM `canho`";
    $listsch = pdo_query($sql);
    return $listsch;
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
function delete_ch($id)
{
    $sql = "DELETE FROM `canho` WHERE id = " . $_GET['id'];
    pdo_execute($sql);
}
?>