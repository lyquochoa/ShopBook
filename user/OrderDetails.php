<?php
        session_start();
        include "../connect.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/main.css">
    <!-- <link rel="stylesheet" href="../css/ThongTin_AD.css"> -->
    <link rel="stylesheet" href="../css/user_order_history.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
    
<style>
    table, td, th {
        border-bottom: 1px solid rgb(244, 244, 244);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 20px 10px;
    }
</style>
    <div id="main">
        <div class="dau">
            <div class="grid">
                <nav class="dau__navbar">
                    <ul class="dau__navbar-list">
                        <li class="dau__navbar-item dau__navbar-item--has-qr dau__navbar-item--separate">
                            Vào cửa hàng trên ứng dụng ShopIT

                            <!-- Begin:dau QR Code -->
                            <div class="dau__qr">
                                <img src="../img/qr_code.png" alt="QR code" class="dau__qr-img">
                                <div class="dau__qr-apps">
                                    <a href="" class="dau__qr-link">
                                        <img src="../img/google_play.png" alt="Google Play" class="dau__qr-download-img">
                                    </a>
                                    <a href="" class="dau__qr-link">
                                        <img src="../img/app_store.png" alt="App Store" class="dau__qr-download-img">
                                    </a>
                                </div>
                            </div>
                            <!-- End:dau QR Code -->

                        </li>
                        <li class="dau__navbar-item">
                            <span class="dau__navbar-title--no-pointer">Kết nối</span>
                            <a href="" class="dau__navbar-icon-link">
                                <i class="dau__navbar-icon fab fa-facebook"></i>
                            </a>
                            <a href="" class="dau__navbar-icon-link">
                                <i class="dau__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    
                    <ul class="dau__navbar-list">
                        <li class="dau__navbar-item dau__navbar-item--has-notify">
                            <a href="" class="dau__navbar-item-link">
                                <i class="dau__navbar-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="dau__notify">
                                <haeder class="dau__notify-dau">
                                    <h3>Thông Báo Mới Nhận</h3>
                                </haeder>
                                <ul class="dau__notify-list">
                                    <li class="dau__notify-item dau__notify-item--viewed">
                                        <a href="" class="dau__notify-link">
                                            <img src="../img/CleanCode.png" alt="" class="dau__notify-img">
                                            <div class="dau__notify-info">
                                                <span class="dau__notify-name">Bạn đã đặt Clean Code</span>
                                                <span class="dau__notify-descriotion">Sách bán chạy nhất của ShopIT</span>

                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="dau__notify-list">
                                    <li class="dau__notify-item">
                                        <a href="" class="dau__notify-link">
                                            <img src="../img/the_clean_coder.jpg" alt="" class="dau__notify-img">
                                            <div class="dau__notify-info">
                                                <span class="dau__notify-name">Bạn đã đặt The Clean Code</span>
                                                <span class="dau__notify-descriotion">Sách bán chạy nhất của ShopIT</span>

                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="dau__notify-list">
                                    <li class="dau__notify-item">
                                        <a href="" class="dau__notify-link">
                                            <img src="../img/CodeComplete2.jpg" alt="" class="dau__notify-img">
                                            <div class="dau__notify-info">
                                                <span class="dau__notify-name">Bạn đã đặt Code Complete 2</span>
                                                <span class="dau__notify-descriotion">Sách bán chạy nhất của ShopIT</span>

                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="dau__notify-footer">
                                    <a href="" class="dau__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="dau__navbar-item">
                            <a href="" class="dau__navbar-item-link">
                                <i class="dau__navbar-icon far fa-question-circle"></i>
                                Trợ giúp
                            </a></li>
                            <li class="dau__navbar-item dau__navbar-user">
                                <?php
                                    
                                    if(isset($_SESSION['user'])){
                                ?>
                                    
                                        
                                <span class="dau__navbar-user-name"><?php echo "".$_SESSION['user']['user_name']."";?></span>

                                <ul class="dau__navbar-user-menu">
                                    <?php
                                        echo'<li class="dau__navbar-user-item">
                                            <a href="UserInfo.php?=MaKH='.$_SESSION['user']['user_id'].'">Tài khoản của tôi</a>
                                            </li>';
                                    ?>
                                    <?php
                                        echo'<li class="dau__navbar-user-item">
                                                <a href="ViewOrder.php?TenKH='.$_SESSION['user']['user_name'].'">Xem đơn hàng</a>
                                            </li>';
                                    ?>
                                    
                                    <li class="dau__navbar-user-item dau__navbar-user-item--separate">
                                        <?php echo '<a href="Logout.php">Đăng xuất</a>';?>
                                    </li>
                                    <?php
                                    }else{
                                        echo '<li class="dau__navbar-user-item dau__navbar-user-item--separate  ;">
                                                <a href="login.php" style="background-color: aquamarine;">Login User</a>
                                            </li>;
                                            <li class="dau__navbar-user-item dau__navbar-user-item--separate  ;">
                                                <a href="../admin/loginadmin.php" style="background-color: aquamarine;">Login Admin</a>
                                            </li>';
                                    }
                                ?>
                                </ul>
                            </li>
                    </ul>
                </nav>

                <div class="dau-with-search">
                    <div class="dau__logo">
                        <a href="Index.php" class="dau__logo-link">
                            <h1 class="dau__logo-img">ShopIT</h1>
                        </a>
                    </div>

                    <form action="Book.php" method="post" class="dau__search">
                            <div class="dau__search-input-wrap">
                                <input type="text" name="key" class="dau__search-input" placeholder="Nhập tên sách để tìm kiếm dễ dàng hơn">
                            </div>
                            <div class="dau__search-select">
                                <a href="Book.php" class="dau__search-select-label">BOOKS IT</a>
                                <i class="dau__search-select-icon fas fa-book"></i>
                            </div>
                            <button class="dau__search-btn">
                                <i class="dau__search-btn-icon fas fa-search"></i>
                            </button>
                    </form>

                    <!-- Cart layout -->
                    <div class="dau__cart">
                            <a href="Cart.php" class="dau__cart-wrap">
                                <i class="dau__cart-icon fas fa-shopping-cart"></i>
                            </a>
                    </div>
                </div>
            </div>  
        </div>

        <div class="page-admin">
            <div class="sidebar-admin">
            <div class="sidebar-admin">
                <div class="sidebar-title">DANH SÁCH CHỨC NĂNG</div>
                <a class="sidebar-item" href="UserInfo.php">
                    <span class="fa fa-user-alt"></span>
                    <span class="sidebar-item-title">Thông tin tài khoản</span>
                </a>
                <a class="sidebar-item" href="ViewOrder.php">
                    <span class="fa fa-address-card"></span>
                    <span class="sidebar-item-title">Xem đơn hàng</span>
                </a>
            </div>
                    
            </div>

               

            <div class="content-user">
                <div class="admin-title-account" style="font-size: 18px; padding: 0;">Chi tiết đơn hàng</div>
                <div class="user-table" style="width: 100%;">
                    <table>
                        <thead>
                            <tr>
                                <th style="text-align: center;">Mã đơn hàng</th>
                                <th style="width: 150px;">Tên Sản phẩm</th>
                                <th style="width: 150px;">Số lượng</th>
                                <th style="width: 150px;">Giá</th>
                                
                            </tr>
                        </thead>
                        <?php
                            $query="SELECT sach.TenSach as TenSach , donhang.MaDH,chitietdonhang.* FROM donhang 
                            inner join chitietdonhang on donhang.MaDH=chitietdonhang.MaDH 
                            inner join sach ON sach.MaSach=chitietdonhang.MaSach where donhang.MaDH=".$_GET['MaDH'];
                           
                            $result=mysqli_query($conn,$query);
                            if(mysqli_num_rows($result) > 0)
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                        ?>
                        <tbody>
                            <tr class="order-rows">
                                <td style="text-align: center;"><a href=""><?php echo $row['MaDH'] ?></a></td>
                                <td style="text-align: center;"><?php echo $row['TenSach'] ?></td>
                                <td style="text-align: center;"><?php echo $row['DinhLuong'] ?></td>
                                <td style="text-align: center;"><?php echo $row['Gia'] ?></td>
                                
                            </tr>
                        </tbody>
                        <?php
                                }
                            }
                            
                        ?>
                    </table>
                </div>
                
                <div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Trung Tâm Trợ Giúp</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">ShopIT Mall</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Giới thiệu</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Tuyển dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Điều khoản</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Sách tốt nhất</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Sách bán chạy</a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Sách tìm kiếm nhiều nhất</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Theo dõi</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-instagram"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-linkedin"></i>
                                    Linkedin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                        <div class="footer__dowload">
                            <img src="../img/qr_code.png" alt="Download QR" class="footer__download-qr">
                            <div class="footer__download-apps">
                                <a href="" class="footer__dowload-app-link">
                                    <img src="../img/google_play.png" alt="Google play" class="footer__dowload-app-img">
                                </a>
                                <a href="" class="footer__dowload-app-link">
                                    <img src="../img/app_store.png" alt="App store" class="footer__dowload-app-img">
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="footer__bottom">
                <div class="grid" >
                    <p class="footer__text">© 2015 - Bản quyền thuộc về Công ty TNHH ShopIT</p>
                </div>
            </div>
        </footer>

</body>
</html>