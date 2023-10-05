<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng xuất</title>
</head>

<body>
<?php
session_start();
//unset($_SESSION["logined"]);//hủy 1 biến $_SESSION["logined"]
session_destroy();//hủy toàn bộ các biến session
$thongbao = "LOG OUT SUCCESS";
$link_tieptuc = "index.php";
require("Views/vKetqua.php");
?>
</body>
</html>