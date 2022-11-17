<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
<div class="mt-4 mx-auto max-w-7xl">
    <form action="index.php?build=tk" method="POST">
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Tên đăng nhập</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="acount"  value="Tên đăng nhập" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Mật khẩu</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="pass"  value="Mật khẩu" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Email</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="email"  value="Email" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Số điện thoại</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="phone"  value="Số điện thoại" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Địa chỉ</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="address"  value="Địa chỉ" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Họ tên</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="name"  value="Họ tên" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Chức vụ</h1>
        <select name="chucvu" id="">
            <?php
            foreach($list_chucvu as $cv){
                extract($cv);
                echo'<option value="'.$id.'">'.$tenchucvu.'</option>';
            }
            ?>
        </select>
        <br>
        <input class="bg-sky-400 rounded p-1 text-white" type="submit" name="themmoi" value="Thêm mới">
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?build=ltk">Danh sách tài khoản</a></button>
        <?php
            if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
        ?>
    </form>
    </div>
</div>
