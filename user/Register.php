<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- Nhúng file CSS -->
    <link rel="stylesheet" href="../css/Login_Register.css" />
    <title>Register</title>
</head>
<body>
<?php
    include_once('../connect.php');
    if (isset($_POST["btn_submit"])) {
		$Email = $_POST["email"];
		$MatKhau = $_POST["matkhau"];
		$TenKH = $_POST["username"];
		$Phone = $_POST["sdt"];
		if ($Email == "" || $MatKhau == "" || $TenKH == "" || $Phone == "") {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
		}else{
            $sql="select * from taikhoan where email='$Email'";
            $kt=mysqli_query($conn, $sql);

            if(mysqli_num_rows($kt)  > 0){
                echo "Tài khoản đã tồn tại";
            }else{
                $sql = "INSERT INTO taikhoan(
                    Email,
                    MatKhau,
                    TenKH,
                    Phone
                    ) VALUES (
                    '$Email',
                    '$MatKhau',
                    '$TenKH',
                    '$Phone'
                    )";
                    mysqli_query($conn,$sql);
                    echo "Chúc mừng bạn đã đăng ký thành công";
                }
            }
    }
?>
    <form action="Register.php" method="post">
        <div class="register">
            <h1>Đăng ký</h1>
            <p>Vui lòng điền thông tin để đăng ký</p>
            <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Nhập địa chỉ email" name="email" id="email">
                <label for="matkhau"><b>Mật khẩu</b></label>
                <input type="password" placeholder="Nhập mật khẩu" name="matkhau" id="matkhau">
                <label for="username"><b>Họ và tên</b></label>
                <input type="text" placeholder="Họ và tên đầy đủ" name="username" id="username">
                <label for="sdt"><b>Số điện thoại</b></label>
                <input type="text" placeholder="Nhập số điện thoại" name="sdt" id="sdt">
                
            <hr>
            <p>Để tạo tài khoản vui lòng đồng ý với điều khoản của chúng tôi</p>
            <input type="submit" name="btn_submit" id="" class="submit" value="Đăng ký">
        </div>
        <div class="register login">
            <p>Bạn đã có tài khoản rồi? <a href="Login.php">Đăng nhập</a>.</p>
        </div>
    </form>
</body>
</html>