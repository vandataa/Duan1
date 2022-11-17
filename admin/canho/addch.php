<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
<div class="mt-4 mx-auto max-w-7xl">
    <form action="index.php?build=addhome" enctype="multipart/form-data" method="POST">
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Kiểu nhà</h1>
        <select name="iddm" id="">
            <?php
            foreach($listdm as $dm){
                extract($dm);
                echo'<option value="'.$id.'">'.$tendanhmuc.'</option>';
            }
            ?>
        </select>
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Vị trí nhà</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="vitri" value="Vị trí của căn hộ" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Giá niêm yết</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="niemyet" value="Giá niêm yết dự kiến" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">HÌnh tham khảo</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="file" name="hinh" value="Hình ảnh tham khảo" >
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Video tham khảo</h1>
        <input class="border-black border-2 rounded-[20px] w-[600px]" type="text" name="video" value="video tham khảo" >   
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Trạng thái</h1>
        <select name="tinhtrang" id="">
            <?php
            foreach($listst as $st){
                extract($st);
                echo'<option value="'.$id.'">'.$status_home.'</option>';
            }
            ?>
        </select>
        <h1 class="text-[17px] font-medium text-gray-600 p-2">Mô tả chi tiết</h1>
        <textarea class="border " name="mota" id="" cols="80" rows="10"></textarea>
        <br>
        <input class="bg-sky-400 rounded p-1 text-white" type="submit" name="themmoi" value="Thêm mới">
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?build=lch">Danh sách căn hộ hiện có</a></button>
        <?php
            if(isset($thongbao)&&($thongbao!='')) echo $thongbao;
        ?>
    </form>
    </div>
</div>
