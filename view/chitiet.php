<div class="page-title-area title-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Chi tiết</h2>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
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



            echo ' 
                <h2>Chi tiết nhà tư vấn</h2>
                <div class="row">
    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <span>Vị trí nhà : ' . $vitri . ' </span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <span>Giá niêm yết:' . $niemyet . '</span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <span>Tên khách hàng:' . $hoten . '</span>
                        </div>
                    </div>
                ';
            ?>
            <form method="post" action="index.php?home=chang_tt&&id=<?= $id_tk ?>">
                <div class="col-lg-12">
                    <div class="form-group">
                        <span>Ngày tư vấn :<?= $ngaytuvan ?></span>
                        <input type="date" name="date" class="form-control" value="Thay đổi">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <h3><span>Nhân viên tư vấn</span></h3>
                        <select name="nhanvien" id="" width="1200px">
                            <?php
                            foreach ($list_nhanvien as $cv) {
                                extract($cv);
                                echo '<option  value="' . $id . '">' . $tennhanvien . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <h1>Ghi chú</h1>
                        <input type="text" name="ghichu" class="form-control" placeholder="Ghi chú">
                    </div>
                </div>

                <div class="col-lg-12">
                    <input type="submit" name="change" class="btn common-btn" value="Thay đổi">
                </div>
            </form>
        </div>
    </div>
</div>