<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
    <div class="mx-auto max-w-7xl">
        <form action="index.php?build=ltk_nv" method="post">
            <input type="text" name="kyw" id="">
            <select name="chucvu" id="">
                <option value="0" selected>--Tất cả--</option>
                <?php
                foreach ($listnv as $cv) {
                    extract($cv);
                    echo '<option value="' . $id . '">' . $tenchucvu . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="ok" value="OK">
        </form>
        <table class="mx-auto ">
            <thead class="w-full mb-2">
                <tr class="bg-blue-200 w-full">
                    <th class="w-[50px] ">Mã nhân viên </th>
                    <th class="w-[100px]">Tên đăng nhập</th>
                    <th class="w-[100px]">Mật khẩu</th>
                    <th class="w-[400px]">Email</th>
                    <th class="w-[150px]">Số điện thoại </th>
                    <th class="w-[300px]">Địa chỉ</th>
                    <th class="w-[150px]">Họ tên </th>
                    <th class="w-[150px]">Chức vụ</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($listtk as $tk) {
                    extract($tk);
                    $suatk = "index.php?build=suatk_nv&id=" . $id;
                    $xoatk = "index.php?build=xoatk_nv&id=" . $id;
                    $chucvu1 = "";
                    if ($chucvu == 1) {
                        $chucvu1 = 'Khách hàng';
                    } elseif ($chucvu == 2) {
                        $chucvu1 = 'Nhân viên';
                    } elseif ($chucvu == 3) {
                        $chucvu1 = 'Quản lí';
                    }

                    echo ' <tr>
                    <td>' . $id . '</td>
                    <td>' . $taikhoan . '</td>
                    <td>' . $matkhau . '</td>
                    <td>' . $email . '</td>
                    <td>' . $sdt . '</td>
                    <td>' . $diachi . '</td>
                    <td>' . $hoten . '</td>
                    <td>' . $chucvu1 . '</td>
                    <td>
                        <a href="' . $suatk . '" class="p-1 bg-blue-300 rounded">Sửa</a> 
                        <a href="' . $xoatk . '" class="p-1 bg-blue-300 rounded">Xóa</a>
                    </td>
                ';
                } ?>
            </tbody>
        </table>
        <iframe src="" frameborder="0"></iframe>
        <a href="index.php?build=tk_nv"><input class="bg-sky-400 rounded p-1 text-white" type="submit" name="themmoi"
                value="Thêm mới"></a>
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?build=ltk_nv">Danh sách tài
                khoản</a></button>
        <?php
        if (isset($thongbao) && ($thongbao != ''))
            echo $thongbao;
        ?>
    </div>