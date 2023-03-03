<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    
    
</head>
<body>

    <?php
        session_start();
    ?>
    
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
          
        <div id="content">
            <!-- About section -->
            <div id="band" class="content-section">
                <h2 class="section-heading">The Books</h2>
                <p class="section-sub-heading"> We love book</p>
                <p class="about-text">
                    Như danh sách những lĩnh vực trong ngành IT được liệt kê ở trên, chắc bạn sẽ tự đặt câu hỏi là “nhiều lĩnh vực như vậy thì phải tìm những cuốn sách công nghệ thông tin về lĩnh vực nào? Cuốn nào phù hợp với mình?”
                    Tùy vào lĩnh vực mà bạn tìm hiểu hay công việc mà bạn sẽ lựa chọn cho mình những đầu sách công nghệ thông tin phù hợp.
                    ShopIT sẽ gợi ý một số đầu sách công nghệ thông tin mà bạn nên tìm đọc:</p>
                <div class="row members-list">
                    <div class="col col-third text-center">
                        <p class="member-name">Code Complete 2</p>
                        <img src="../img/CodeComplete2.jpg" alt="Name" class="member-img">
                    </div>
                    <div class="col col-third text-center">
                        <p class="member-name">Clean Code</p>
                        <img src="../img/CleanCode.png" alt="Name" class="member-img">
                    </div>
                    <div class="col col-third text-center">
                        <p class="member-name">The Clean Coder</p>
                        <img src="../img/the_clean_coder.jpg" alt="Name" class="member-img">
                    </div>
                    
                </div>
            </div>

            <!-- Tuor section -->
            <div id="tuor" class="tour-section">
                <div class="content-section">
                    <h2 class="section-heading text-white">SELLING</h2>
                <!-- Tickets -->
                <ul class="tickets-list">
                    <li>Code dạo kí sự<span class="sold-out">Update</span></li>
                    <li>The Complete Book<span class="sold-out">Update</span></li>
                    <li>The Woman Code<span class="quantity">3</span></li>
                </ul>
                                                                                                                                    
                    <!-- Places -->
                    <div class="row places-list">
                        <div class="col col-third">
                            <img src="../img/CodeDaoKiSu.png" alt="New York" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">Code dạo kí sự</h3>
                                <p class="place-desc">Bạn có thích cuốn sách này không?</p>
                                <a href="#" class="btn">Buy Book</a>
                            </div>
                        </div>
                        <div class="col col-third">
                            <img src="../img/CompleteBook.png" alt="New York" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">The Complete Book</h3>
                                <p class="place-desc">Bạn có thích cuốn sách này không?</p>
                                <a href="#" class="btn">Buy Book</a>
                            </div>
                        </div>
                        <div class="col col-third">
                            <img src="../img/mm.png" alt="New York" class="place-img">
                            <div class="place-body">
                                <h3 class="place-heading">The Woman Code</h3>
                                <p class="place-desc">Bạn có thích cuốn sách này không?</p>
                                <a href="#" class="btn">Buy Book</a>
                            </div>
                        </div>
                        
                    </div>  
                </div>
            </div>
            <!-- Begin: Contact section -->
            <div id="contact" class="content-section">
                <h2 class="section-heading">CONTACT</h2>
            
                <div class="row contact-content">
                    <div class="col col-half contact-info">
                        <p><i class="fa fa-map-marker-alt"></i>Sài Gòn, Q.Bình Thạnh</p>
                        <p><i class="fa fa-phone"></i>Phone: 0382352239</p>
                        <p><i class="fa fa-envelope"></i>Email: lyquochoa000@mail.com</p>
                        
                    </div>
                    <div class="col col-half contact-form">
                        <form action="">
                            <div class="row">
                                <div class="col col-half">
                                    <input type="text" name="" required id="" placeholder="Nam" class="form-control">
                                </div>
                                <div class="col col-half">
                                    <input type="email" name="" id="" placeholder="Email" class="form-control">
                                </div>
                                
                            </div>
                            <div class="row mt-8">
                                <div class="col col-full">
                                    <input type="text" name="" id="" placeholder="Message" class="form-control">
                                </div>
                            </div>
                            <input class="btn pull-right mt-16" type="submit" value="SEND">
                        </form>
                    </div>
                </div>
            </div>
            <!-- End: Contact section -->
        
            <div class="map-section">
                <img src="../img/acmong.jpg" alt="Map">
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
    </div>
</body>
</html>