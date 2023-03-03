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
    <title>Cart</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="../css/app.css" type="text/css">
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

        <!-- content -->
        <main role="main">


                <?php

                ?>
            <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
            <div class="container mt-4">
            <?php
                    if (!isset($_SESSION["cart"])) {
                        
                        $_SESSION["cart"]=array();
                    }
                        $thongbao=false;
                        if (isset($_GET['action'])) {
                            function editcart($add=false){
                                foreach ($_POST['sl'] as $MaSach => $sl) {
                                        if ($sl==0) {
                                            unset($_SESSION["cart"][$MaSach]);
                                            
                                        }else{
                                        if ($add) {
                                            @$_SESSION["cart"][$MaSach]+=$sl;
                                            
                                        }
                                        else  {
                                            $_SESSION["cart"][$MaSach]=$sl;
                                        }
                                    }
                                }
                            }
                            switch ($_GET['action']) {
                                case 'add':

                                    editcart(true);
                                    
                                    break;
                                case 'delete':
                                    if (isset($_GET['MaSach'])) {
                                        unset($_SESSION["cart"][$_GET['MaSach']]);
                                    }
                                    
                                    break;
                                case 'submit':
                                    if (isset($_POST['capnhatsl'])) {
                                        editcart();
                                    }
                                    elseif (isset($_POST['btnDatHang'])) {
                                        if (!empty($_POST['sl'])) {
                                            $sql="select * from sach where MaSach in (".implode(',',array_keys($_POST['sl'])).")";
                                            
                                            $kq=mysqli_query($conn,$sql);
                                            $tong=0;
                                            $HD = array();
                                            while ($row=mysqli_fetch_array($kq)) {
                                                $HD[]=$row;  
                                                $tong+=$row['DonGia'] * $_POST['sl'][$row['MaSach']];
                                                
                                            }
                                            // "INSERT INTO `giohang` (`MaGH`, `TenKH`, `Phone`, `DiaChi`, `TongTien`) VALUES (NULL, 'svdvs', '1666', 'sv dsv', '1566')"
                                           @ $addorder=mysqli_query($conn,"INSERT INTO `donhang` (`MaDH`, `TenKH`, `Phone`, `DiaChi`,`HTTT`, `TongTien`) 
                                            VALUES (NULL, '$_POST[kh_ten]', '$_POST[kh_dienthoai]', '$_POST[kh_diachi]','$_POST[httt_ma]', '$tong')");
                                                
                                            $orderID=$conn->insert_id;
                                            $ct="";
                                             foreach ($HD as $key => $kq) {
                                                 
                                                $ct .=" (NULL, '".$orderID."', '".$kq['MaSach']."', '".$_POST['sl'][$kq['MaSach']]."', '".$kq['DonGia']."')" ;
                                                if ($key !=count($HD)-1) {
                                                    $ct .=",";
                                                }
                                             }
                                               
                                            

                                            // "INSERT INTO `chitietdonhang` (`MaCT`, `MaDH`, `MaSach`, `DinhLuong`, `Gia`) VALUES (NULL, '1', '25', '45', '6465165');"
                                            
                                            $addct=mysqli_query($conn,"INSERT INTO `chitietdonhang` (`MaCT`, `MaDH`, `MaSach`, `DinhLuong`, `Gia`) VALUES".$ct."");
                                            $thongbao="Đặt hàng thành công";
                                        }
                                    }
                                    break;
                                
                                default:
                                    # code...
                                    break;
                           
                            
                        }
                    }
                    if (isset($_SESSION["cart"])) {
                        $sql="select * from sach where MaSach in (".implode(',',array_keys($_SESSION["cart"])).")";
                        $kq=mysqli_query($conn,$sql);
                        
                    }
                        
                    ?>
    
                <h1 class="text-center">Giỏ hàng</h1>
                <form action="Cart.php?action=submit" method="post" class="row">
                    <div class="col col-md-12">
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">STT</th>
                                    <th class="text-center">Tên sản phẩm</th>
                                    <th class="text-center">Hình ảnh</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-center">Đơn giá</th>
                                    <th class="text-center">Thành tiền</th>
                                    <th class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <?php 
                                if (!empty($kq)) {
                                    $tong=0;
                                    $num=1;
                             while ($row=mysqli_fetch_array($kq)) {?>
                                
                            
                            <tbody id="datarow">
                            
                                <tr>
                                    <td class="text-center"><?=$num++;?></td>
                                    <td class="text-center"><?=$row['TenSach']?></td>
                                    <td class="text-center"><img style="height: 200px;" src="../img/<?php echo $row["HinhAnh"]; ?>" alt=""></td>
                                    <td class="text-center"><input type="text" value="<?=$_SESSION["cart"][$row['MaSach']]?>" name="sl[<?=$row['MaSach']?>]" class="form-control sl_ip" size="2"></td>
                                    <td class="text-center"><?=number_format($row['DonGia'], 0,",",".")?> VNĐ</td>
                                    <td class="text-center"><?=number_format($row['DonGia'] * $_SESSION["cart"][$row['MaSach']], 0,",",".")?>VNĐ</td>
                                    <td class="text-center">
                            
                                        <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `sp_ma` -->
                                        <a id="delete_1" data-sp-ma="2" class="btn btn-danger btn-delete-sanpham" 
                                        href="Cart.php?action=delete&MaSach=<?=$row['MaSach']?>">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                            
                                        </a>
                                    </td>
                                    </tr>
                                    <?php
                                     $tong+= $row['DonGia'] * $_SESSION["cart"][$row['MaSach']];
                                     }
                                    ?>
                                    <tr>
                                    <td colspan="5" class="text-center">Tổng Giá</td>
                                    <td class="text-center"><?=number_format($tong, 0,",",".")?>VNĐ</td>
                                    <td class="text-center"> 
                                    
                                    </td>
                                    
                                </tr>
                                    <?php
                                    
                                }
                             

                                    ?>
                                
                                
                                
                                
                            </tbody>
                        </table>
                        <input type="submit" name="capnhatsl" class="btn btn-success" value="Cập nhật">
                        <div class="container mt-4">
                                <?php
                                if (isset($_SESSION['user']['user_id'])) {
                                    
                                
                                    $query="SELECT * FROM taikhoan where MaKH =".$_SESSION['user']['user_id'];
                                    $result=mysqli_query($conn,$query);
                                    if(mysqli_num_rows($result) > 0)
                                    {
                                        $row = mysqli_fetch_array($result);
                                ?>
    
                    <div class="row">
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Thông tin khách hàng</h4>
    
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" name="kh_ten" 
                                        value="<?php echo $row["TenKH"]; ?>" >
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_diachi">Địa chỉ</label>
                                    <input type="text" class="form-control" name="kh_diachi" 
                                        value="<?php echo $row["DiaChi"]; ?>">
                                </div>
                                <div class="col-md-12">
                                    <label for="kh_dienthoai">Điện thoại</label>
                                    <input type="text" class="form-control" name="kh_dienthoai" 
                                        value="<?php echo $row["Phone"]; ?>" >
                                </div>
                            </div>
    
                            <h4 class="mb-3">Hình thức thanh toán</h4>
    
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input"
                                        value="Tiền mặt">
                                    <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input"
                                        value="Chuyển khoản">
                                    <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input"
                                        value="Ship COD">
                                    <label class="custom-control-label" for="httt-3">Ship COD</label>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">
                                Đặt hàng</button>
                                        <?php
                                            if(isset($thongbao)) echo $thongbao;
                                        ?>

                                <?php
                                    }
                                    }else{
                                        echo' <div class="row">
                                        <div class="col-md-8 order-md-1">
                                            <h4 class="mb-3">Thông tin khách hàng</h4>
                    
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="kh_diachi">Địa chỉ</label>
                                                    <input type="text" class="form-control" name="kh_diachi" 
                                                        value="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="kh_dienthoai">Điện thoại</label>
                                                    <input type="text" class="form-control" name="kh_dienthoai" 
                                                        value="" >
                                                </div>
                                            </div>
                    
                                            <h4 class="mb-3">Hình thức thanh toán</h4>
                    
                                            <div class="d-block my-3">
                                                <div class="custom-control custom-radio">
                                                    <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input"
                                                        value="1">
                                                    <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input"
                                                        value="2">
                                                    <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input"
                                                        value="3">
                                                    <label class="custom-control-label" for="httt-3">Ship COD</label>
                                                </div>
                                            </div>';
                                    }

                                ?>
                        </div>
                    </div>
                </form>
    
            </div>
                </div>
            </div>
            <!-- End block content -->
        </main>

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom script - Các file js do mình tự viết -->
    <script src="../js/app.js"></script>
    
  
</body>
</html>