<div class="page-title-area title-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Change account</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
?>
<div class="user-area ptb-100">
<div class="container">
        <div class="user-item">
            <form method="post" action="index.php?home=change_account&&id=<?=$id?>">
                <h2>Change</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h1>Họ và tên</h1>
                            <input type="text" name="name" class="form-control" value="<?=$hoten?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <h1>Tài khoản</h1>
                            <input type="text" name="username" class="form-control" value="<?=$taikhoan?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>Email</h1>
                            <input type="email" name="email" class="form-control" value="<?=$email?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>Mật khẩu</h1>
                            <input type="password" name="pass" class="form-control" value="<?=$matkhau?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>Địa chỉ</h1>
                            <input type="text" name="address" class="form-control" value="<?=$diachi?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h1>Số điện thoại</h1>
                            <input type="text" name="phone" class="form-control" value="<?=$sdt?>">
                        </div>
                    </div>
                   
                    <div class="col-lg-12">
                        <?php
                    if (isset($thongbao) && ($thongbao != ""))
                        $thongbao;
                    ?>
                        <input type="submit" name="change" class="btn common-btn" value="Change account">
                        <!--Register</button> -->
                    </div>
                    
                </div>
                
            </form>
        </div>
    </div>  
</div>
<?php                  
}
?>
