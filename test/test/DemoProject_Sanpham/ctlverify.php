<?php

if ($_GET['key'] && $_GET['token']) {
    require_once("Models/clscustomer.php");
    $email = $_GET['key'];
    $token = $_GET['token'];
    $user = new clscus();
    $ketqua = $user->GetUserByemail2($email);

    if ($ketqua == true) {
        $row = $user->data;
        $ketqua2 = $user->timcode($row["cusid"]);
        if ($ketqua2 == true) {
            $ketqua3 = $user->updatestt($row["email"]);
            $thongbao = "Congratulations! Your email has been verified.";
		$link_tieptuc = "index.php";
	require("verifymail.php");
        } else {
            $thongbao = "You have already verified your account with us";
            require("verifymail.php");
        }
    } else {
        $thongbao = "This email has been not registered with us";
        $link_tieptuc = "loginuser.php";
        require("verifymail.php");
        die();
    }
} else {
    
    $thongbao = "Danger! Your something goes to wrong.";
    $link_tieptuc = "loginuser.php";
    require("Views/vKetqua.php");
	die();
}
?>