<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="access/css/login.css">
    <script defer async src="access/js/dangnhap.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Form login </title>
</head>
<body>
    <div id="wrapper">
        <form method="post" id="form-login">
            <h1 class="form-heading">Đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" name="user" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" name="pass" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" value="Đăng nhập" class="form-submit">
        </form>
    </div>
    <?php
    if (isset($_POST['user']) && isset($_POST['pass'])) {
            $username = $_POST['user'];
            $password = $_POST['pass'];
            require_once("connect.php");
            $comm = "select password from account where username = '".$_POST['user']."' and password = '".$_POST['pass']."'";
            $kq = mysqli_query($connect, $comm) or die(mysqli_error($connect));
            if($p = mysqli_fetch_array($kq))
            {
                session_start();
                $_SESSION['user'] = $_POST['user'];
                header('Location: /NKHK-22-23/admin.php');
                // echo "<script type='text/javascript'>window.location='/index.php'</script>";
            }
        }

        ?>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</html>