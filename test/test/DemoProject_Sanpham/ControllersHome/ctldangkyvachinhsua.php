<?php
require_once("Models/clscustomer.php");
//biến $link_tieptuc và $thongbao dùng cho Views/vKetqua.php
$link_tieptuc ="?module=" . $module;
$thongbao ="";
//lấy các thông tin từ request nếu có
$id = isset($_SESSION["cusid"])?$_SESSION["cusid"]:"";
$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$tukhoa = isset($_REQUEST["tTukhoa"])? $_REQUEST["tTukhoa"]:"";

//tạo đối tượng clsSanpham
$user = new clscus();
//gọi các view dựa trên biến act 
if($act == "them"){
	require("ViewsHome/vdangky.php");
}
else if($act == "sua"){//hiển thị form sửa sản phẩm
	$ketqua = $user->TimTheoIDuser($id);
	require("ViewsHome/vsuauser.php");
}
else if($act == "xulythem"){
	require("xulythemuser.php");
}	
else if($act == "xulysua"){
	require("xulySuauser.php");}

?>

