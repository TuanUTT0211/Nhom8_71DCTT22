<?php
require_once("Models/clscustomer.php");
//biến $link_tieptuc và $thongbao dùng cho Views/vKetqua.php
$link_tieptuc ="?module=" . $module;
$thongbao ="";
//lấy các thông tin từ request nếu có
$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$tukhoa = isset($_REQUEST["tTukhoa"])? $_REQUEST["tTukhoa"]:"";
$manhom = isset($_REQUEST["manhom"])?$_REQUEST["manhom"]:0;
//tạo đối tượng clsSanpham
$sanpham = new clscus();
//gọi các view dựa trên biến act 
if($act == "them"){
	require("Views/vThemuser.php");
}
else if($act == "sua"){//hiển thị form sửa sản phẩm
	$ketqua = $sanpham->TimTheoIDuser($id);
	require("Views/vSuauser.php");
}
else if($act == "xoa"){
	require("xulyXoauser.php");
}
else if($act == "xulythem"){
	require("xulyThemuser.php");
}	
else if($act == "xulysua"){
	require("xulySuauser.php");}
else{ //tìm kiếm sản phẩm sản phẩm
	$ketqua = $sanpham->LayDanhSachuser2("");
	require("Views/vDanhSachuser.php");
}	
?>