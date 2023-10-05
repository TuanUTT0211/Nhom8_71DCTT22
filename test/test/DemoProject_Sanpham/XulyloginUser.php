<?php
session_start();//khai báo sử dụng $_SESSION[]
require("Models/clscustomer.php");
if(isset($_REQUEST["tUser"])==false)//nếu chưa chạy form Login.php
{
	//echo "<a href=\"Login.php\"> Mời đăng nhập</a>";
	$thongbao = "YOU ARE NOT LOG IN";
	$link_tieptuc = "loginuser.php";
	require("Views/vKetqua.php");
	die();//dừng trang web
}
$user = $_REQUEST["tUser"];
$pass= $_REQUEST["tPassword"];
//$pass = $pass;//sử dụng hàm của php mã hóa md5() mật khẩu mà người dùng nhập
$admin = new clscus();
$ketqua = $admin->KiemTrauser($user,$pass);
if($ketqua==FALSE)
{
	$thongbao = "DATABASE ERROR";
	$link_tieptuc = "loginuser.php";
	require("Views/vKetqua.php");;
	die();
}
$row = $admin->data;
if($row!=NULL)//đăng nhập thành công
{
	if($row["status"]==1)
	{
		//khởi tạo biến $_SESSION["logined"] để vượt quả KiemtraDangnhap.php
		$_SESSION["logined"] ="OK";
		$_SESSION["user"] = $row["user"];
		$_SESSION["name"] = $row["fullname"];
		$_SESSION["tel"]  = $row["tel"];
		$_SESSION["adress"]  = $row["adress"];
		$_SESSION["email"]  = $row["email"];
		$_SESSION["cusid"]  = $row["cusid"];
		//header("location:index_admin.php");
		$thongbao = "Log in Success";
		$link_tieptuc = "index.php";
	require("Views/vKetqua.php");
	}
	else
	{
		$thongbao = "Account is locked";
		$link_tieptuc = "loginuser.php";
		require("Views/vKetqua.php");;
	}
}
else
{
	$thongbao = "WRONG  USER OR PASSWORD";
	$link_tieptuc = "loginuser.php";
	require("Views/vKetqua.php");;
}
?>