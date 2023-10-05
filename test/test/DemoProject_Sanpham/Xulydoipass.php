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
$email = $_REQUEST["tUser"];
$pass= $_REQUEST["tPassword"];
//$pass = md5($pass);//sử dụng hàm của php mã hóa md5() mật khẩu mà người dùng nhập
$admin = new clscus();
$ketqua = $admin->KiemTraemail($email);
if($ketqua==FALSE)
{
	$thongbao = "DATABASE ERROR";
	$link_tieptuc = "forgotpass.php";
	require("Views/vKetqua.php");;
	die();
}
$row = $admin->data;
if($row!=NULL)//đăng nhập thành công
{
	if($row["status"]==1)
	{
        $ketqua2 = $admin->Suapassuser($email,$pass);
		//header("location:index_admin.php");
        if($ketqua2==FALSE)
	{$thongbao="DATABASE ERROR";}
else{
		$thongbao = "Change password Success";
		$link_tieptuc = "loginuser.php";
	require("Views/vKetqua.php");}
	}
	else
	{
		$thongbao = "Account is locked";
		$link_tieptuc = "forgotpass.php";
		require("Views/vKetqua.php");;
	}
}
else
{
	$thongbao = "This Email hasnt sign up yet";
	$link_tieptuc = "forgotpass.php";
	require("Views/vKetqua.php");;
}
?>