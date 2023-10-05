<?php
require_once("DungChung/Tienich.php");
$user = $_REQUEST["t1"];
$pass = $_REQUEST["t2"];
$fullname = $_REQUEST["t3"];
 
$tel = $_REQUEST["t4"];
$adress = $_REQUEST["t5"];
$email = $_REQUEST["t6"];
$status =1;
if(isset($_REQUEST["rTrangthai"]))
	$status = $_REQUEST["rTrangthai"];
$nhomsp = $_REQUEST["s1"];

$ketqua = $sanpham->Themuser($user,$pass,$fullname,$tel,$adress,$email, $status);
if($ketqua==FALSE)
	$thongbao="Lỗi thêm dữ liệu";
else
	$thongbao ="Thêm dữ liệu thành công";

require("Views/vKetqua.php");
?>