<?php
require_once("Models/clsTintuc.php");
 
//lấy các thông tin từ request nếu có

//tạo đối tượng clsSanpham
$tin = new clsTintuc();
$soketqua =0;
 
	$ketqua = $tin->LayDanhSachTintuc();
	if($ketqua)
		$soketqua = $tin->db->pdo_stm->rowCount();
 
require("ViewsHome/v_DSTin.php");
  
?>