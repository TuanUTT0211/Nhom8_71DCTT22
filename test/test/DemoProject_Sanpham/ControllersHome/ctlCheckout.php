<?php
require_once("Models/clsHoadon.php");
require_once("Models/clsSanpham.php");
require("KiemtraDangNhapuser.php");


//biến $link_tieptuc và $thongbao dùng cho Views/vKetqua.php
$link_tieptuc ="?module=cart";
$thongbao ="";
//Lấy thông tin từ form và chèn hóa đơn mới
if(isset($_SESSION["cart"])==false)
	$thongbao ="Emty cart";
else if(isset($_REQUEST["dathang"])==false)
	$thongbao ="Error submit form Order";
else
{
	
	$hoten = $_REQUEST["hoten"];
	$dtmua = $_REQUEST["dtmua"];
	$ngnhan  = $_REQUEST["ngnhan"];

	$dienthoai = $_REQUEST["dienthoai"];
	$diachi = $_REQUEST["diachi"];
	$note  = $_REQUEST["note"];
	$ngaynhan = $_REQUEST["ngaynhan"];
	$cusid = $_SESSION["cusid"] ;
	$hoadon = new clsHoadon();
	$ketqua = $hoadon->ThemHoadon($hoten,$dtmua, $ngnhan,$dienthoai, $diachi,$note, $ngaynhan, $cusid);
	if($ketqua==FALSE)
		$thongbao ="ERROR ADD A NEW ORDER";
	else
	{
		//lấy mã hóa đơn tự động sinh từ lệnh insert trên
		$mahd = $hoadon->getLastId();
		$sanpham = new clsSanpham();
		//duyệt từng mặt hàng trong giỏ hàng (cart) lấy ra masp và soluong
		//lưu mã hóa đơn, mã sản phẩm, số lượng, giá sản phẩm vào chi tiết hóa đơn
		foreach($_SESSION["cart"] as $masp=>$soluong)
		{
			$ketqua = $sanpham->TimTheoIDSanpham($masp);
			$giasp = $sanpham->data["price"];//lấy giá sản phẩm
			$ketqua = $hoadon->ThemChitietHoadon($mahd,$masp,$soluong,$giasp);
			if($ketqua==FALSE)
				$thongbao ="ERROR ADD DETAIL ORDER";
			else
			{
				unset($_SESSION["cart"]);//xóa giỏ hàng
 				$thongbao ="THANKS YOU FOR BUYING FROM US, WE WILL CONTACT SOON ";

			}
		}
	}
}
$sanpham = new clsSanpham();
$ketqua = $sanpham->LaySanphamMoiNhat(3);//lấy 3 sản phẩm mới nhất
require_once("ViewsHome/v_Home.php");
require("Views/vKetqua.php");
?>