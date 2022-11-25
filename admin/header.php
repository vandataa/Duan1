<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-full mx-auto">
        <div class=" bg-black flex justify-between">
            <div class="logo pl-4">
                <a href=""><span class="text-[40px] text-orange-300">D</span><span class="text-white">landing</span></a>
            </div>
            <div class="">
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>

                <ul class="flex">
                    <li class="text-white pr-4 pt-3 "><a class="hover:bg-blue-300 p-[7px] rounded"
                            href="index.php?build=ldm">Danh mục</a></li>
                    <li class="text-white pr-4 pt-3 "><a class="hover:bg-blue-300 p-[7px] rounded"
                            href="index.php?build=addhome">Căn hộ</a> </li>
                    <li class="text-white pr-4 pt-3 "><a class="hover:bg-blue-300 p-[7px] rounded"
                            href="index.php?build=khachhang">Khách hàng</a></li>
                    <li class="text-white pr-4 pt-3 "><a class="hover:bg-blue-300 p-[7px] rounded"
                            href="index.php?build=tk">Tài khoản</a></li>
                    <?php
                    if ($chucvu == 3) {
                    ?>
                    <li class="text-white pr-4 pt-3 "><a class="hover:bg-blue-300 p-[7px] rounded"
                            href="index.php?build=tk_nv">Nhân viên</a></li>
                    <?php
                    }
                    ?>
                    <li class="text-white pr-4 pt-3 "><a class="hover:bg-blue-300 p-[7px] rounded"
                            href="index.php?build=bl">Bình luận</a></li>
                    <li class="text-white pr-4 pt-3 "><a class="hover:bg-blue-300 p-[7px] rounded"
                            href="index.php?build=logout">Đăng xuất</a></li>
                </ul>

                <?php
                }
                ?>
            </div>
        </div>