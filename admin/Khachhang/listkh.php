<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
    <div class="mx-auto max-w-7xl">
        <form action="index.php?build=khachhang" method="post">
            <input type="text" name="kyw" id="">
            <select name="nhanvien" id="">
                <option value="0" selected>--Tất cả--</option>
                <?php
                foreach ($listnv  as $cv) {
                    extract($cv);
                    echo '<option value="' . $id . '">' . $hoten . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="ok" value="OK">
        </form>
        <table class="mx-auto ">
            <thead class="w-full mb-2">

                <tr class="bg-blue-200 w-full">
                    <th class="w-[50px] ">Mã khách hàng </th>
                    <th class="w-[100px]">Tên khách hàng</th>
                    <th class="w-[100px]">Địa chỉ</th>
                    <th class="w-[400px]">Email</th>
                    <th class="w-[150px]">Nhà đã chọn</th>
                    <th class="w-[300px]">Thuộc loại</th>
                    <th class="w-[150px]">Tình trạng</th>
                    <th class="w-[150px]">Nhân viên phụ trách</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($listkh as $kh) {
                    extract($kh);
                    $suakh = "index.php?build=suakh&id=" . $id;
                    $xoakh = "index.php?build=xoakh&id=" . $id;

                    echo ' <tr>
            <td>' . $id . '</td>
            <td>' . $tendangnhap . '</td>
            <td >' . $makhhau . '</td>
            <td>' . $email . '</td>
            <td>' . $sdt . '</td>
            <td>' . $diachi . '</td>
            <td>' . $hoten . '</td>
            <td>' . $chucvu . '</td>
            <td>
                <a href="' . $suakh . '" class="p-1 bg-blue-300 rounded">Sửa</a> 
                <a href="' . $xoakh . '" class="p-1 bg-blue-300 rounded">Xóa</a>
            </td>
        </tr>';
                } ?>
            </tbody>
        </table>
        <iframe src="" frameborder="0"></iframe>
        <a href="index.php?build=kh"><input class="bg-sky-400 rounded p-1 text-white" type="submit" name="themmoi"
                value="Thêm mới"></a>
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?build=lkh">Danh sách tài
                khoản</a></button>
        <?php
        if (isset($thongbao) && ($thongbao != ''))
            echo $thongbao;
        ?>
    </div>