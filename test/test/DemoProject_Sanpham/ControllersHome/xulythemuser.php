<?php

require_once("Dungchung/tienich.php");
$username = $_REQUEST["t1"];
$pass = $_REQUEST["t2"];
$name = $_REQUEST["t3"];
$tel = $_REQUEST["t4"];
$adress = $_REQUEST["t5"];
$mail = $_REQUEST["t6"];
$trangthai = 1;
if(isset($_REQUEST["rTrangthai"]))
	$trangthai = $_REQUEST["rTrangthai"];
	$token = md5($_POST['t6']).rand(10,9999);
$ketqua = $user->Themuser($username,$pass,$name,$tel,$adress,$mail,$trangthai);
if($ketqua==FALSE)
	$thongbao="Lỗi thêm dữ liệu";
else
	$thongbao ="Đăng Ký thành công, Hãy đăng nhập để tiếp tục";
	$link_tieptuc =  "loginuser.php";
	/*$ketqua3 = $user->GetUserByUsername2($username);
	if($ketqua3==true){
		$rows = $user->data["cusid"];
	}
	$mail = $_POST["t6"];
	$ketqua = $user->dky($rows,$token,1);
	$link =
	 '<a href="?ctlverify.php?key=<?=$mail?>&token=<?=$token?>">Click and Verify Email</a>'; 
	
	SendMail2($mail,$link);*/
	
require("Views/vKetqua.php");
?>