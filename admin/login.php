<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="index.php?build=login">
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
</body>

</html>