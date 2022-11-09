<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
<div class="mx-auto max-w-7xl">
    <form action="index.php?build=lch" method="post">
        
        <input type="text" name="kyw" id="">
        <select name="iddm" id="">
            <option value="0" selected>--Tất cả--</option>
        <?php
            foreach($listdm as $dm){
                extract($dm);
                echo'<option value="'.$id.'">'.$tendanhmuc.'</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="OK">
    </form>
    <table class="mx-auto ">
        <thead class="w-[1200px] mb-2">
           
            <tr class="bg-blue-200 w-full">
                <th class="w-[50px] ">Mã Nhà</th>
                <th class="w-[300px]">Vị trí nhà</th>
                <th class="w-[400px]">Hình</th>
                <th class="w-[90px]">Giá niêm yết</th>
                <th class="w-[100px]">Trạng thái</th>
                <th></th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($listch  as $ch) {
            extract($ch);
            $suach = "index.php?build=suach&id=" . $id;
            $xoach = "index.php?build=xoach&id=" . $id;
            $hinhpad="../uploads/".$hinh;
            if(is_file($hinhpad)){
                $hinhch = "<img src='".$hinhpad."' class='w-[200px] h-auto' >";
            }
            
            else{
                $hinh ='no photo';
            }
                echo ' <tr>
            <td>' . $id . '</td>
            <td>' . $vitri . '</td>
            <td class="w-5 h-3">' . $hinhch . '</td>
            <td>' . $niemyet . '</td>
            <td>' . $tinhtrang . '</td>
            <td >
                <a href="' . $suach . '" class="p-1 bg-blue-300 rounded">Sửa</a> 
                <a href="' . $xoach . '" class="p-1 bg-blue-300 rounded">Xóa</a>
            </td>
        </tr>';
}?>
        </tbody>
    </table>
    <a href="index.php?build=addhome"><input class="bg-sky-400 rounded p-1 text-white" type="submit" name="themmoi"
            value="Thêm mới"></a>
    <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?build=lch">Danh sách sản
            phẩm</a></button>
    <?php
if (isset($thongbao) && ($thongbao != ''))
    echo $thongbao;
?>
</div>