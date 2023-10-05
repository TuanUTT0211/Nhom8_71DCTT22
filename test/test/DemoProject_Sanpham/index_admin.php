<?php
session_start();
require("KiemtraDangNhap.php");
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" type="text/css" href="css_Admin/Style.css">
	<link rel="stylesheet" type="text/css" href="css_Admin/Menu.css">
	<link rel="stylesheet" type="text/css" href="css_Admin/ContentRight.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css_Admin/Admin.css">

	<!--nhúng file css và js của Slide show-->
	<link rel="stylesheet" type="text/css" href="CSS/SlideShow.css">
	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="JS/SlideShow.js"></script>
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script language="javascript" src="JS/JQuery.js"></script>
	<script language="javascript" src="JS/ckeditor/ckeditor.js"></script>
	<script language="javascript" src="JS/ckfinder/ckfinder.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body class="testi" style="background-image: url(https://thumbs.dreamstime.com/z/admin-login-sign-table-made-wood-68499314.jpg);">
	

	<div id="content" class="clear_fix">
		
	<div>
		<?php include("Views/vHeader.php"); ?>
	</div>
		<?php
		$module = "";
		if (isset($_REQUEST["module"]))
			$module = $_REQUEST["module"];
		if ($module == "tintuc") {
			require("Controllers/ctlTintuc.php");
		} else if ($module == "nhomsp") {
			require("Controllers/ctlCategory.php");
		} else if ($module == "sanpham") {
			require("Controllers/ctlSanpham.php");
		} else if ($module == "hoadon") {
			require("Controllers/ctlHoadon.php");
		} else if ($module == "user") {
			require("Controllers/ctluser.php");
		}
		 else {
			require("Views/vHome.php");
		}
		?>
	</div>



	</div>
</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<!-- datatable JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.7.0.js" ></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js" ></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

</html>