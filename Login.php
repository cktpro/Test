<!DOCTYPE html>
<style>
<?php include 'Include/Main.css'; ?>
</style>
<?php include 'Include/Home.php'; ?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <h2 style="text-align: center">Vui Lòng Đăng Nhập</h2>
        <form action="XuLyLog.php" method="POST">
            <div class="">
                <label for="uname"><b>Tài khoản</b></label>
                <input type="text" placeholder="Nhập tài khoản" name="t1" required>

                <label for="psw"><b>Mật khẩu</b></label>
                <input type="password" placeholder="Nhập mật khẩu" name="t2" required>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Lưu mật khẩu
                </label>
                <button type="submit">Đăng nhập</button>

            </div>

        </form>

    </body>
</html>
