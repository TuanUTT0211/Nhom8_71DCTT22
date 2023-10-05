<?php
 
$id = $_REQUEST["id"];
$fullname = $_REQUEST["t1"];
$tel = $_REQUEST["t2"];
$adress = $_REQUEST["t4"];
$email = $_REQUEST["t3"];
  
 
	
$ketqua = $user->Suauser($id,$fullname,$tel,$adress,$email);
if($ketqua==FALSE)
	$thongbao="Data Error";
else
	$thongbao ="Edit Complete";

require("Views/vKetqua3.php");
?>