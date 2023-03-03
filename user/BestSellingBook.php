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
    <title>Best Selling Book</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    
    <!-- Bootstrap Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
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

        <div class="app__container">
            <div class="grid">
                 <div class="grid__row app__content">
                     <div class="grid__column-2">
                         <nav class="category">
                             <h3 class="category__heading">
                                 <i class="category__heading-icon fas fa-list"></i>
                                 Danh mục
                             </h3>
             
                             <ul class="category-list">
                                 <li class="category-item">
                                     <a href="Book.php" class="category-item__link">Tất cả sản phẩm</a>
                                 </li>
                                 <li class="category-item category-item--active">
                                     <a href="BestSellingBook.php" class="category-item__link">Sản phẩm bán chạy</a>
                                 </li>
                                 <li class="category-item">
                                     <a href="FeaturedBook.php" class="category-item__link">Sản phẩm nổi bật</a>
                                 </li>
                             </ul>
                         </nav>
                     </div>
 
                     <div class="grid__column-10">
                         <div class="home-filter">
                             <span class="home-filter__label">Sắp xếp theo</span>
                             <button class="home-filter__btn btn">Phổ biến</button>
                             <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                             <button class="home-filter__btn btn">Bán chạy</button>
 
                             <div class="select-input">
                                 <span class="select-input__label">Giá</span>
                                 <i class="select-input__icon fas fa-angle-down"></i>
                                 
                                 
                                 <ul class="select-input__list">
                                     <li class="select-input__item">
                                         <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                                     </li>
                                     <li class="select-input__item">
                                         <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                                     </li> 
                                 </ul>
                             </div>
 
                             <div class="home-filter__page">
                                 <span class="home-filter__page-num">
                                     <span class="home-filter__page-current">1</span>
                                     /14
                                 </span>
 
                                 <div class="home-filter__page-control">
                                     <a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
                                         <i class="home-filter__page-icon fas fa-angle-left"></i>
                                     </a>
                                     <a href="" class="home-filter__page-btn">
                                         <i class="home-filter__page-icon fas fa-angle-right"></i>
                                     </a>
 
                                 </div>
                             </div>
                         </div>
                         
                         <div class="home-product">
                             <div class="grid__row">
                                        <?php
                                            // Chức năng phân trang
                                            $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
                                            $current_page = !empty($_GET['page'])?$_GET['page']:1;
                                            $offset = ($current_page - 1) * $item_per_page;
                                            $query = "SELECT * FROM sach WHERE DanhMuc = 'Bán chạy' ORDER BY MaSach ASC LIMIT ".$item_per_page." OFFSET ".$offset;
                                            $totalRecords = mysqli_query($conn, "SELECT * FROM sach");
                                            $totalRecords = $totalRecords->num_rows;
                                            $totalPages = ceil($totalRecords / $item_per_page)
                                        ?>
                                        
                                        <?php
                                            // Chức năng Search
                                            if (isset($_POST['key'])) {
                                                $key=$_POST['key'];
                                                $query="select * from sach where TenSach like '%$key%'";
                                            }
                                            $result = mysqli_query($conn,$query);
                                            if(mysqli_num_rows($result) > 0)
                                            {
                                                while($row = mysqli_fetch_array($result))
                                                {
                                        ?>
                                    <div class="grid__column-2-4">
                                        <form method="post" action="" class="home-product-item">
                                            <a class="home-product-item" href="ProductDetail.php?MaSach=<?php echo $row["MaSach"]; ?>">
                                                <img class="home-product-item__img" src="../img/<?php echo $row["HinhAnh"]; ?>" style="margin-left: 20px;" width="150px">
                                                <h4 class="home-product-item__name"><?php echo $row["TenSach"]; ?></h4>
                                                <div class="home-product-item__price">
                                                    
                                                    <span class="home-product-item__price-current"><?php echo $row["DonGia"]; ?>VNĐ</span>

                                                    <input type="hidden" name="hidden_name" value="<?php echo $row["TenSach"]; ?>" />

                                                    <input type="hidden" name="hidden_price" value="<?php echo $row["DonGia"]; ?>" />
                                                </div>
                                                <div class="home-product-item__action">
                                                    <span class="home-product-item__link home-product-item__link--linked">
                                                        <i class="home-product-item__link-icon-empty far fa-heart"></i>
                                                        <i class="home-product-item__link-icon-fill fas fa-heart"></i>
                                                    </span>
                                                    <div class="home-product-item__rating">
                                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="home-product-item__origin">
                                                    <span class="home-product-item__brand">Whoo</span>
                                                    <span class="home-product-item__origin-name">Nhật Bản</span>
                                                </div>
                                                <div class="home-product-item__favourite">
                                                    <i class="fas fa-check"></i>
                                                    <span>Yêu thích</span>
                                                </div>
                                            </a>
                                        </form>
                                       
                                    </div>
                                <?php
                                }
                            }
                                ?>
                                
                             </div>
                             
                                
                            </div>
                                <div>
                        
                            <ul class="pagination home-product__pagination">
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-left"></i>
                                    </a>
                                </li>
                                
                                <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
                                    <?php if ($num != $current_page) { ?>
                                    <li class="pagination-item">
                                        <a href="?per_page=<?=$item_per_page?>&page=<?=$num?>"
                                        class="pagination-item__link"><?=$num?></a>
                                    </li>
                                    <?php } else { ?>
                                    <li class="pagination-item pagination-item--active">
                                        <a href="" class="pagination-item__link"><?=$num?></a>
                                    </li>
                                    <?php } ?>
                                <?php } 
                                // pagination-item--active
                                ?>
                                
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        
                     </div>
                 </div>
            </div>
        </div>

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