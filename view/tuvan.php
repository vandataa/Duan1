<div class="page-title-area title-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Đặt lịch tư vấn</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_SESSION['user'])) {
    $hoten = $_SESSION['user']['hoten'];
    $diachi = $_SESSION['user']['diachi'];
    $email = $_SESSION['user']['email'];
    $sdt = $_SESSION['user']['sdt'];
} else {
    $hoten = '';
    $diachi = '';
    $email = '';
    $sdt = '';
} ?>

<div class="user-area ptb-100">
    <div class="container">
        <div class="user-item">
            <form method="post" action="index.php?home=get_tuvan">
                <h2>Thông tin </h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>Họ và tên</h1>
                            <input type="text" name="name" class="form-control" value="<?= $hoten ?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>Địa chỉ</h1>
                            <input type="text" name="address" class="form-control" value="<?= $diachi ?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>Email</h1>
                            <input type="email" name="email" class="form-control" value="<?= $email ?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>Số điện thoại</h1>
                            <input type="text" name="phone" class="form-control" value="<?= $sdt ?>">
                        </div>
                    </div>
                    <?php
                    if (isset($onehouse)) {
                        extract($onehouse);
                    ?>
                    <input type="hidden" name="id_home" class="form-control" value="<?= $id ?>">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>Vị trí căn hộ</h1>
                            <?= $vitri ?>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>Giá căn hộ</h1>
                            <?= $niemyet ?> 
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="col-lg-12">
                        <?php
                        if (isset($thongbao) && ($thongbao != ""))
                            $thongbao;
                        ?>
                        <input type="submit" name="nhan" class="btn common-btn" value="Nhận tư vấn">
                    
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>