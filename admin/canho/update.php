<?php
if (is_array($home)) {
    extract($home);
}
$hinhpath = "../uploads/" . $hinh;
if (is_file($hinhpath)) {
    $hinhs = "<img src='" . $hinhpath . "' width='80'>";
} else {
    $hinhs = "no photo";
}
$id = $_GET["id"];
?>
<div class="mx-auto max-w-7xl bg-white mt-2  rounded">
    <div class="p-2 bg-blue-200 rounded">
        <h1 class="">Cập nhập căn hộ</h1>
    </div>
    <div class="m-3">
        <form method="POST" enctype="multipart/form-data" action="index.php?build=update_home&id=<?php echo $id ?>">
            <h1 class="text-[17px] font-medium text-gray-600 p-2">Kiểu nhà</h1>

            <select name="iddm">
                <option value="0">Tất cả </option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    if ($iddm == $id)
                        echo '<option value="' . $id . '" selected>' . $tendanhmuc . '</option>';
                    else
                        echo '<option value="' . $id . '" >' . $tendanhmuc . '</option>';
                }
                ?>
            </select>
            <h1 class="text-[17px] font-medium text-gray-600 p-2">Vị trí nhà</h1>
            <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="vitri"
                value="<?= $vitri ?>">
            <h1 class="text-[17px] font-medium text-gray-600 p-2">Giá niêm yết</h1>
            <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="niemyet"
                value="<?= $niemyet ?>">
            <h1 class="text-[17px] font-medium text-gray-600 p-2">HÌnh tham khảo</h1>
            <input class="border-black border-2 rounded-[20px] w-[600px]" type="file" name="hinh" 
                value="<?= $hinhs ?>">
            <h1 class="text-[17px] font-medium text-gray-600 p-2">Video tham khảo</h1>
            <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="video"
                value="<?= $video ?>">
            <h1 class="text-[17px] font-medium text-gray-600 p-2">Trạng thái</h1>
            <select name="tinhtrang" id="">
                <?php
                foreach ($listst as $st) {
                    extract($st);
                    echo '<option value="' . $id . '">' . $tinhtrang . '</option>';
                }
                ?>
            </select>
            <h1 class="text-[17px] font-medium text-gray-600 p-2">Mô tả chi tiết</h1>
            <textarea class="border " name="mota" id="" cols="80" rows="10">
                <?=$mota?>
            </textarea>
            <br>
            <input class="bg-sky-400 rounded p-1 text-white" type="submit" name="update" value="Sửa căn hộ">
            <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?build=lch">Danh sách căn hộ
                    hiện có</a></button>
            <?php
            if (isset($thongbao) && ($thongbao != ''))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>