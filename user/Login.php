<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/Login_Register.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <?php
        session_start();
        include_once('../connect.php');
        if(isset($_POST['dangnhap'])){ 
            $email = $_POST['email'];
            $pass = $_POST['matkhau'];
            $select = "SELECT * FROM taikhoan WHERE Email='$email' AND MatKhau = '$pass'";
            $kq = mysqli_query($conn,$select);
            $num = mysqli_num_rows($kq);
            if($num==1){
                $user = mysqli_fetch_array($kq);
                $_SESSION['user']['user_id'] = $user['MaKH'];
                $_SESSION['user']['user_name'] = $user['TenKH'];
                $_SESSION['user']['user_sex'] = $user['GioiTinh'];
                header("location: ../user/Index.php");
            }else{
                $error='wrong passwork';
            }
        }
    ?>
    <form action="Login.php" method="post">
        <div class="register">
            <h1>Đăng nhập</h1>
            <p>Vui lòng điền thông tin để đăng nhập</p>
            <hr>
                <label for="email"><b>Tên đăng nhập</b></label>
                <input type="text" placeholder="Nhập địa chỉ email" name="email" id="email">
                <label for="matkhau"><b>Mật khẩu</b></label>
                <input type="password" placeholder="Nhập mật khẩu" name="matkhau" id="matkhau">
            <hr>
            <input type="submit" name="dangnhap" id="" class="submit" value="Đăng nhập">
        </div>
        <div class="register login">
            <p>Đăng ký tài khoản mới tại đây <a href="Register.php">Đăng ký</a>.</p>
        </div>
    </form>
</body>
</html>