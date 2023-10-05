<?php

$link_tieptuc ="loginuser.php";
$thongbao ="";

$number_check = $_REQUEST["number_check"];
$password = $_REQUEST["password"];

$random_number = $_SESSION["random_number"];
$email = $_SESSION["email"];
$user = $_SESSION["user_fg"];

if($random_number == $number_check)
{
    $ketqua = $user_check->SuaPasstuUser($user,$password);
    unset($_SESSION["random_number"]);
    unset($_SESSION["email"]);
    unset($_SESSION["user_fg"]);
    if($ketqua==FALSE)
        $thongbao="Lỗi sửa dữ liệu";
    else
        $thongbao ="Đổi password thành công";
    require("ViewsHome/vKetqua.php");
}
else
{
    $thongbao="Sai mã xác minh, vui lòng điền lại";
    $link_tieptuc ="ctlForgotPassword.php?act=re_fill";
    require("ViewsHome/vKetqua.php");
}
?>