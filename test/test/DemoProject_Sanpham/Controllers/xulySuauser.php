<?php
require_once("DungChung/Tienich.php");
$id = $_REQUEST["id"];
$user = $_REQUEST["t1"];
$pass = $_REQUEST["t2"];
$fullname = $_REQUEST["t3"];
$tel = $_REQUEST["t4"];
$adress = $_REQUEST["t5"];
$email = $_REQUEST["t6"];
$status =1;
if(isset($_REQUEST["rTrangthai"]))
	$status = $_REQUEST["rTrangthai"];
$ketqua = $sanpham->Suafulluser($id,$user,$pass, $fullname, $tel,$adress,$email,$status);
if($ketqua==FALSE)
	$thongbao="Lỗi sửa dữ liệu";
else
	$thongbao ="Sửa dữ liệu thành công";

require("Views/vKetqua.php");
?>