<?php
if (is_array($tk)) {
    extract($tk);
}
$id = $_GET["id"];
?>
<div class="mx-auto max-w-7xl bg-white mt-2  rounded">
    <div class="p-2 bg-blue-200 rounded">
        <h1 class="">Cập nhập tài khoản</h1>
    </div>
    <div class="m-3">
        <form method="POST" enctype="multipart/form-data" action="index.php?build=update_tk_nv&id=<?php echo $id ?>">
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Tên đăng nhập</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="acount"  value="<?=$taikhoan?>" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Mật khẩu</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="pass"  value="<?=$matkhau?>" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Email</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="email"  value="<?=$email?>" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Số điện thoại</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="phone"  value="<?=$sdt?>" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Địa chỉ</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="address"  value="<?=$diachi?>" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Họ tên</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="name"  value="<?=$hoten?>" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Chức vụ</h1>
        <select name="chucvu" id="">
            <?php
            foreach($listcv as $cv){
                extract($cv);
                echo'<option value="'.$id.'">'.$tenchucvu.'</option>';
            }
            ?>
        </select>
        <br>
        <input class="bg-sky-400 rounded p-1 text-white" type="submit" name="update" value="Cập nhật">
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?build=ltk_nv">Danh sách tài khoản</a></button>
        <?php
            if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
        ?>
        </form>
    </div>
</div>
</div>