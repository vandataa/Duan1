<div class="page-title-area title-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>My account</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
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

?>

<div class="user-area ptb-100">
    <div class="container">
        <ul>
            <li>
                <a href="#">
                <h3>Your name : <?= $hoten ?>
            </h3>
                </a>
            </li>
            <li>
                <a href="#">
                <h3>Your phone : <?= $sdt ?>
            </h3>
                </a>
            </li>
            <li>
                <a href="#">
                <h3>Your account : <?= $taikhoan ?>
            </h3>
                </a>
            </li>
            <li>
                <a href="#">
                <h3>Your password : <?= $matkhau ?>
            </h3>
                </a>
            </li>
            <li>
                <a href="#">
                <h3>Your email : <?= $email ?>
            </h3>
                </a>
            </li>
            <li>
                <a href="#">
                <h3>Your address : <?= $diachi ?>
            </h3>
                </a>
            </li>
            <a href="index.php?home=change_account" class="btn common-btn" value="">Changge account</a>
        </ul>
    </div>
</div>
<?php
}
?>