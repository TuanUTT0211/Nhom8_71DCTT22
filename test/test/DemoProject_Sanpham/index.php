<?php
session_start();
require("KiemtraDangNhapuser.php");
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
    <link rel="stylesheet" type="text/css" href="CSS/Menu.css">
    <link rel="stylesheet" type="text/css" href="CSS/Sanpham.css">
    <link rel="stylesheet" type="text/css" href="CSS/Cart.css">
    <link rel="stylesheet" type="text/css" href="CSS/ContactUs.css">
    <link rel="stylesheet" href="./CSS/style copy.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--nhúng file css và js của Slide show-->
    <link rel="stylesheet" type="text/css" href="CSS/SlideShow.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="JS/SlideShow.js"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/style copy.css">
</head>

<body>
    <div class="off_canvas_overlay"></div>
    <div>
        <?php include("ViewsHome/inc_newHeader.php"); ?>
    </div>


    <div class="clear_fix container-fluid">
        
        <?php
        //hiển thị phần nội dung giữa của trang web
        $module = "";
        if (isset($_REQUEST["module"]))
            $module = $_REQUEST["module"];
        if ($module == "tintuc") {
            require("ControllersHome/ctlTintuc.php");
        } else if ($module == "chitiettintuc") {
            require("ControllersHome/ctlchitietTintuc.php");
        } else if ($module == "sanpham") {
            require("ControllersHome/ctlSanpham.php");
        } else if ($module == "chitietsanpham") {
            require("ControllersHome/ctlChitietSanpham.php");
        } else if ($module == "cart") {
            require("ControllersHome/ctlCart.php");
        } else if ($module == "checkout") {
            require("ControllersHome/ctlCheckout.php");
        } else if ($module == "lienhe") {
            require("ViewsHome/vcontact.php");
        }else if ($module == "dangky") {
            require("ControllersHome/ctldangkyvachinhsua.php");
        } else {
            require("ControllersHome/ctlHome.php");
        }
        ?>
        <?php

        ?>

    </div>
    <div>
        <?php include("ViewsHome/inc_Footer.php"); ?>
    </div>

</body>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<!-- OwlCarousel2 JavaScript Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="./Dependencies/jquery.min.js"></script>
<script src="./Dependencies/jquery.easing.min.js"></script>
<script src="./Dependencies/bootstrap.min.js"></script>
<script src="./Dependencies/masterslider.min.js"></script>
<script src="./Dependencies/owl.carousel.min.js"></script>
<script src="./Dependencies/main.js"></script>
<script type="text/javascript" src="./Dependencies/jquery/jquery.3.6.1.js"></script>
 <script type="text/javascript" src="./Dependencies/Back-to-top.js"></script>
    <script type="text/javascript" src="./JS/Onkeyup.js"></script>
    <script type="text/javascript" src="./JS/checkuser.js"></script> 
    <script type="text/javascript" src="./JS/checktel.js"></script>
    <script type="text/javascript" src="./JS/checkemail.js"></script>

</html>