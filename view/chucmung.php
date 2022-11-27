<div class="page-title-area title-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Nhân tư vấn thành công</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <span>Thông tin khách hàng</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="user-area ptb-100">
    <div class="container">
        <div class="user-item">

            <?php
                if (isset($_SESSION['user'])) {
                ?>

            <h2>mong quý khách theo dõi điện thoại và email để dễ dàng trao đổi</h2>
            <div class="row">
                <?php
                    foreach ($listkh as $kh) {
                        extract($kh);
                        $tdtt = 'index.php?home=ct_one_house&&id=' . $id_kh;
                        $stt = 0;
                        $stt++;
                    ?>
                <span>Số nhà:<?= $stt ?></span>

                <span>Địa chỉ nhà:<?= $vitri ?></span>

                <span>Số điện thoại:<?= $sdt ?></span>

                <span>Ngày tư vấn:<?= $ngaytuvan ?></span>

                <span>Nhân viên phụ trách:<?= $tennhanvien ?></span>

                <span><a href="<?= $tdtt ?>">Chi tiết</a></span>

                <?php
                    }
                    ?>
                <?php
                } else {
                ?>
                <h2>Bạn hãy đăng nhập để xem các căn nhà đã kí kết</h2>
                <div class="row">
                    <?php
                }
                    ?>
                </div>
            </div>
        </div>