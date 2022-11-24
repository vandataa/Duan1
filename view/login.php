<div class="page-title-area title-bg-four">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Login</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <span>Login</span>
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
                <form method="post" action="index.php?home=login">
                    <h2>Login</h2>
                    <?php
                    if (isset($thongbao) && ($thongbao != ""))
                        $thongbao;
                    ?>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email:">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password:">
                    </div>
                    <input type="submit" name="dangnhap" class="btn common-btn" value="Login">
                    <h4>Or</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <i class='bx bxl-facebook'></i>
                                Login With Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bxl-google'></i>
                                Login With Google
                            </a>
                        </li>
                    </ul>
                    <h5>Didn't Have An Account? <a href="index.php?home=resign_tk">Register</a></h5>
                </form>
            </div>
        </div>
    </div>
