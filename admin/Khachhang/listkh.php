<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
    <div class="mx-auto max-w-7xl">
        <!-- <form action="index.php?build=khachhang" method="post">
            <input type="text" name="kyw" id="">
            <select name="nhanvien" id="">
                <option value="0" selected>--Tất cả--</option>
                <?php
                foreach ($listnv as $cv) {
                    extract($cv);
                    echo '<option value="' . $id . '">' . $hoten . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="ok" value="OK">
        </form> -->
        <table class="mx-auto ">
            <thead class="w-full mb-2">

                <tr class="bg-blue-200 w-full">
                    <th class="w-[50px] ">Mã khách hàng </th>
                    <th class="w-[100px]">Tên khách hàng</th>
                    <th class="w-[400px]">Địa chỉ</th>
                    <th class="w-[100px]">Số điện thoại</th>
                    <th class="w-[100px]">Email</th>
                    <th class="w-[150px]">Nhà đã chọn</th>
                    <th class="w-[300px]">Thuộc loại</th>
                    <th class="w-[150px]">Tình trạng</th>
                    <th class="w-[150px]">Nhân viên phụ trách</th>
                    <th class="w-[100px]">Ngày tư vấn</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($listkh as $kh) {
                    extract($kh);
                    $suakh = "index.php?build=suakh_kh&id=" . $id_kh;
                    echo ' <tr>
            <td>' . $id_kh . '</td>
            <td>' . $hoten . '</td>
            <td>' . $diachi . '</td>
            <td>' . $sdt . '</td>
            <td>' . $email . '</td>
            <td>' . $vitri . '</td>
            <td>' . $tendanhmuc . '</td>
            <td>' . $status_home . '</td>
            <td>' . $nhanvien . '</td>
            <td>' . $ngaytuvan . '</td>
            <td>
                <a href="' . $suakh . '" class="p-1 bg-blue-300 rounded">Sửa</a> 
                
            </td>
        </tr>';
                } ?>
            </tbody>
        </table>
        
    </div>