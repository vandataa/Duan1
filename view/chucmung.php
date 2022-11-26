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
            <form method="post" action="index.php?home=resign_tk">
                <h2>mong quý khách theo dõi điện thoại và email để dễ dàng trao đổi</h2>
                <div class="row">
                    <?php
                    foreach ($listkh as $kh) {
                        extract($kh);
                        ?>
                        
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>
                                <?= $vitri ?>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>
                                <?= $hoten ?>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>
                                <?= $idsp ?>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1></h1>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1></h1>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
            </form>
        </div>
    </div>
</div>