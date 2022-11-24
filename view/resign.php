<div class="page-title-area title-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Register</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>Register</span>
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
                <h2>Register</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name:">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="User Name:">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email:">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" placeholder="Password:">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="password" name="repass" class="form-control" placeholder="Confirm Password:">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                <label class="form-check-label" for="flexCheckDefault4">
                                    I accept all <a href="terms-conditions.html">Terms & Conditions</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <?php
                    if (isset($thongbao) && ($thongbao != ""))
                        $thongbao;
                    ?>
                        <input type="submit" name="resign" class="btn common-btn" value="Register">
                        <!--Register</button> -->
                    </div>
                </div>
                <h4>Or</h4>
                <ul>
                    <li>
                        <a href="#">
                            <i class='bx bxl-facebook'></i>
                            Register With Facebook
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bxl-google'></i>
                            Register With Google
                        </a>
                    </li>
                </ul>
                <h5>Already Have An Account? <a href="index.php?home=login">Login</a></h5>
            </form>
        </div>
    </div>
</div>