<?php
require_once("Models/clsTintuc.php");
//biến $link_tieptuc và $thongbao dùng cho Views/vKetqua.php

$thongbao ="";
$manhom = 0;
$masp = 0;
//lấy các thông tin từ request nếu có
if(isset($_REQUEST["manhom"]))
$manhom = $_REQUEST["manhom"];
if(isset($_REQUEST["id"])){
$masp = $_REQUEST["id"];} 
//tạo đối tượng clstintuc
$tintuc = new clsTintuc();
$link_tieptuc ="?module=" . $module . "&id=" . $masp;
if($masp > 0)
{
	$ketqua = $tintuc->TimTheoIDTintuc($masp,1);//tìm tin có $matin và status=1
	
    require("ViewsHome/v_ChitietTintuc.php");
}
else
{
	$link_tieptuc="index.php";
	$thongbao = "id tin tức không hợp lệ";
	require("Views/vKetqua.php");
}
?>