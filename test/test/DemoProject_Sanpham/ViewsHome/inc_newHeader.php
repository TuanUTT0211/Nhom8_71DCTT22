<header>
    <div class="main_header header_transparent header-mobile-m">
        <div class="header_container sticky-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2" style="display: inline-block;">
                        <div class="logo">
                            <a href="index.php"> <img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6" style="display: inline-block;">
                        <div class="main_menu menu_two menu_position">
                            <nav>
                                <ul>
                                    <li>
                                        <a class="nav-link" href="index.php" class="active">Home</a>
                                    </li>
                                    <li class="nav-item dropdown sub_menu pages">
                                        <a class="nav-link dropdown-toggle" href="?module=sanpham" id="dropdownId"
                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Wines</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                                            <?PHP
                                            require_once("Models/clsCategory.php");
                                            $mnuNhomSP = new clsCategory();
                                            $ketqua = $mnuNhomSP->LayDanhSachNhomSanpham(1, 1); //lấy ds nhomsp có trạng thái =1 và sắp xếp theo cat_ord tăng dần
                                            ?>

                                            <?php
                                            $rows = $mnuNhomSP->data;
                                            foreach ($rows as $row) {
                                                ?>
                                                <a class="dropdown-item"
                                                    href="?module=sanpham&categoryid=<?= $row["cat_id"] ?>"><?= $row["cat_name"] ?></a>
                                                <?php
                                            }
                                            ?>


                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="?module=lienhe">About Us</a></li>
                                    <li>
                                        <a class="nav-link" href="?module=tintuc">NEWS </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="text-white">User <b>
                                                    <?= isset($_SESSION["user"]) ? $_SESSION["user"] : "" ?>
                                                </b></span></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownId">

                                            <a class="dropdown-item">
                                                <div style="padding-left:20px;">
                                                    <?= isset($_SESSION["user"]) ? "<a  href='logoutuser.php'>Log out</a>" : "<a href='loginuser.php'>Log In</a>" ?>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="?module=dangky&act=them"> Sign up</a>

                                        </div>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-lg-4" style="display: inline-block;">
                        <div class="header_top_right">
                            <div class="header_right_info">
                                <ul>
                                    <li class="search_box">

                                        <a href="javascript:void(0)">
                                            <i class="fa fa-search"></i>
                                        </a>

                                        <div class="search_widget">
                                            <input type="hidden" name="module" value="sanpham">
                                            <input type="hidden" name="act" value="timkiem">

                                            <form class="mb-3" name="fTimkiem" id="fTiemkiem"
                                                action="?module=sanpham&act=search" method="post">
                                                <input type="text" name="keyword" id="searchInput" onkeyup="search()"
                                                    class="input-search htop" placeholder="Search Your Wine...">

                                                <div class="icon-search htop">
                                                    <button type="submit" class="button-search" name="bSearch"
                                                        id="bSearch">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>

                                            </form>
                                            <table id="searchResults" class="header-info-search bg-light rounded"
                                                style="height:150px; overflow-y:scroll;">
                                            </table>
                                        </div>

                                    </li>

                                    <li class="mini_cart_wrapper">
                                        <?PHP
                                        require_once("Models/clsCategory.php");
                                        require_once("Models/clsSanpham.php");
                                        $count = 0;
                                        if (isset($_SESSION["cart"]))
                                            $count = count($_SESSION["cart"]);

                                        ?>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="item_count">
                                                <?= $count ?>
                                            </span>
                                        </a>
                                        <?php
                                        if ($count == 0) {
                                            ?>
                                            <div class="mini_cart mini_cart2">
                                                <div class="cart_gallery">
                                                    <div class="cart_info">
                                                        <p>Chưa có hàng trong giỏ</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } else //count>0
                                        {
                                            $arr = array_keys($_SESSION["cart"]); //lấy ra danh sách các key của mảng cart
                                            $str = implode(",", $arr); //tạo chuỗi chứa các phần tử của mảng ngăn cách bởi dấu phẩy
                                            //tạo đối tượng clsSanpham
                                            $sanpham = new clsSanpham();
                                            $ketqua = $sanpham->TimTheo_DS_IDSanpham($str, 2);
                                            if ($ketqua == FALSE) {
                                                echo "<h2>Lỗi hiển thị sản phẩm từ CSDL</h2>";
                                            } else {
                                                $total = 0; //tổng tiền của tất cả sản phẩm trong giỏ hàng
                                                $rows = $sanpham->data;
                                                ?>
                                                <div class="mini_cart mini_cart2">
                                                    <div style="height:150px; overflow-y:scroll;">
                                                        <?php
                                                        foreach ($rows as $row) {
                                                            $masp = $row["id"];
                                                            $soluong = $_SESSION['cart'][$masp]; //số lượng của masp từ giỏ hàng
                                                            $total += $soluong * $row["price"];

                                                            $hinhanh = $row["images"];
                                                            if ($hinhanh == "")
                                                                $hinhanh = "no-Image.png";
                                                            ?>

                                                            <div class="cart_gallery">
                                                                <div class="cart_item">
                                                                    <div class="cart_img">
                                                                        <a
                                                                            href="?module=chitietsanpham&manhom=<?= $row["cat_id"] ?>&masp=<?= $row["id"] ?>">
                                                                            <img src="hinhanh/Sanpham/<?= $hinhanh ?>">
                                                                        </a>
                                                                    </div>
                                                                    <div class="cart_info">

                                                                        <a
                                                                            href="?module=chitietsanpham&manhom=<?= $row["cat_id"] ?>&masp=<?= $row["id"] ?>">
                                                                            <?= $row["title"] ?>
                                                                        </a>
                                                                        <p>
                                                                            <?= number_format($row["price"]) ?> VNĐ x
                                                                            <?= $soluong ?>
                                                                        </p>


                           </div>
                                                                    <div class="cart_remove">
                                                                        <a href="?module=cart&act=del&masp=<?= $row["id"] ?>"
                                                                            title="Xóa sản phẩm"> X </a>
                                                                    </div>
                                    </div>
                                                            </div>
          <?php
                                                        }
         ?>
                                                    </div>


                                                    <div class="mini_cart_table">
                                                        <div class="cart_table_border">

                                                            <div class="cart_total mt-10">
                                                                <span>Total :</span>
                                                                <span class="price">
                                                                    <?= number_format($total) ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mini_cart_footer">
                                                        <div class="cart_button">
                                                            <a href="?module=cart">View Cart</a>
                                                        </div>
                                                        <div class="cart_button">
                                                            <a href="?module=checkout">Checkout</a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } ?>


                                    </li>

                                </ul>
                            </div>
                            <div class="header_account">
                                <ul>
                                    <li class="top_links">
                                        <a href="#">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <ul class="dropdown_links">
                                            <li><a href="?module=checkout">Checkout</a></li>
                                            <li><a href="?module=dangky&act=sua">My Account</a></li>
                                            <li><a href="?module=cart">Shopping Cart</a></li>
                                            <li><a href="#">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="language">
                                        <a href="#">
                                            <img src="images/language.png" alt=""> EN <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown_language">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Germany</a></li>
                                            <li><a href="#">Japanese</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency">
                                        <a href="#">
                                            INR<i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">EUR - EURO</a></li>
                                            <li><a href="#">GBP - British Pound</a></li>
                                            <li><a href="#">USD - US Dollar</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>