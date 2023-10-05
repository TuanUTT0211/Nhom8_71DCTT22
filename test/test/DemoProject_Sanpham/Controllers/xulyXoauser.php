<?php
require_once("Models/clscustomer.php");
if($id!="" && is_numeric($id))
{
	//bổ sung kiểm tra id sản phẩm có trong bảng tbChitietSanpham (cột masp) hay chưa?
	//nếu chưa có thì xóa sản phẩm, nếu đã có thì không được xóa mà update cột status =0
	$hd = new clscus();
	$hd->TimTheoIDuser($id);
	if($hd->data==NULL) //nếu chưa có sản phẩm nào trong hóa đơn liên quan thì xóa
	{	
		$ketqua = $sanpham->Xoauser($id);
		if($ketqua==FALSE)
			$thongbao="Lỗi xóa dữ liệu";
		else
			$thongbao ="Xóa dữ liệu thành công";
	}
	else
	{
		$ketqua = $sanpham->SuaTrangThaiuser($id,0);
		if($ketqua==FALSE)
		$thongbao="Lỗi xóa dữ liệu";
		else
		$thongbao ="Không xóa sản phẩm do Đã có  chi tiết hóa đơn liên quan
					<br>Đã cập nhật sang trạng thái không hiển thị ";
	}
}
else
	$thongbao ="Xóa dữ liệu lỗi id user";

require("Views/vKetqua.php");
?>