<?php
function buy_house($id_user, $id_home, $tinhtrang, $nhanvien)
{
    $sql = "INSERT INTO `khachhang`(`idkh`,`idsp`,`tinhtrang`,`nhanvien`) value ('$id_user','$id_home','$tinhtrang','$nhanvien' )";
    pdo_execute($sql);
}
function nhanvien()
{
    $sql = "SELECT * FROM `taikhoan` WHERE chucvu = 2";
    $tk = pdo_query_one($sql);
    return $tk;
}
function home_buy_now($idkh)
{

    $sql = "SELECT * FROM `khachhang` where 1 idkh =' . $idkh . '";
    $sql .= "order by id desc";
    $listch = pdo_query($sql);
    return $listch;
}
function full_home_buy_now($idkh)
{
    $sql = "SELECT * FROM `khachhang` 
    where idkh=" . $idkh;
    $listch = pdo_query($sql);
    return $listch;
}
function change_time($id, $date,$nhanvien,$ghichu)
{
    $sql = "UPDATE `khachhang` set `ngaytuvan`='" . $date . "',`nhanvien`='".$nhanvien."',`ghichu`='".$ghichu."' where id_kh=" . $id;
    pdo_execute($sql);

}
?>