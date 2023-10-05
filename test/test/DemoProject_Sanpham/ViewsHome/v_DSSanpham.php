<div class="container">
	<br>
	<h2 class=" text-center" >
		<?php
		if ($act == "timkiem")
			echo "KẾT QUẢ TÌM KIẾM";
		else
			echo "DANH SÁCH SẢN PHẨM";
		?>
	</h2>
	<?php
	/*if ($sanpham->data == NULL)
		echo "<h5>KHÔNG TÌM THẤY SẢN PHẨM</h5>";
	else
		if ($act == "timkiem")
			echo "<h5>CÓ " . $soketqua . " SẢN PHẨM</h5>";
		else if ($tennhom != "")
			echo "<H2> Loại rượu cần tìm: " . $tennhom . "</H2>";
        */
	?>
	<?php
	$link = "";
	if (isset($_REQUEST["keyword"]))
		$link .= "&keyword=$keyword";
	else if (isset($_REQUEST["categoryid"]))
		$link .= "&categoryid=$categoryid";
	?>
	<div class="row d-flex justify-content-around mx-auto mt-3">
		<?php
		//B1.khai báo biến lưu giới hạn số sản phẩm cần hiển thị trên 1 trang
		$limit = 9;
		//B2.Tính tổng số sản phẩm 
		
		$product_page = new clsSanpham();

		$total_records = $product_page->GetSumProductPaging($categoryid, $keyword);
		if ($total_records == NULL)
			die("<h3> Không tìm thấy sản phầm cần tìm </h3>");
		//B3.Tính tổng số trang sẽ có = ceil(Tổng số sản phẩm / Số sản phẩm trên 1 trang)
//$total_pages để dùng cho vòng lặp hiển thị các trang: 1 | 2 | ...|$total_pages
		$total_pages = ceil((int) $total_records / $limit);
		//B4. Xác định vị trí trang muốn hiển thị (từ link phân trang)
//Ví dụ: index.php?trang=1, index.php?trang=2
		$current_page = 1; //gán mặc định trang cần hiển thị = 1
		if (isset($_REQUEST["page"]) && is_numeric($_REQUEST["page"])) {
			$current_page = $_REQUEST["page"];
		} else {
			$_REQUEST["page"] = 1;
		}
		if ($current_page <= 0) //nếu trang cần hiển thị <=0 thì gán về trang 1
			$current_page = 1;
		if ($current_page > $total_pages) //nếu vượt quá tổng số trang thì gán bằng trang cuối
			$current_page = $total_pages;
		//B5. Tính vị trí đầu tiên của bản ghi cần truy vấn ứng số vị trí trang cần hiển thị
		$start = ($current_page - 1) * $limit;
		$product_page->GetProductList(1,$categoryid,$keyword,$sell,$start,$limit);
		$rowsProduct = $product_page->data;
		if($rowsProduct==NULL)
			die("<h3> KHÔNG CÓ SẢN PHẨM NÀO </h3>");
		foreach($rowsProduct as $row)
		{
		 
			$hinhanh = $row["images"];
			if ($hinhanh == "")
				$hinhanh = "no-Image.png";
			$trangthai = "";
			if ($row["status"] == 1)
				$trangthai = "có";
			else
				$trangthai = "không";
			?>

			<div class=" d-grid gap-3 card text-center mt-5 p-3" style="width: 18rem;">
				<a class="card-link" href="?module=chitietsanpham&manhom=<?= $row["cat_id"] ?>&masp=<?= $row["id"] ?>"><img
						src="Hinhanh/Sanpham/<?= $hinhanh ?>" class="card-img-top"></a>
				<div class="card-body">
					<h5 class="card-title"><a style="text-decoration: none;"
							href="?module=chitietsanpham&manhom=<?= $row["cat_id"] ?>&masp=<?= $row["id"] ?>"
							class="card-link"><?= $row["title"] ?></a></h5>
					<!-- thẻ <a href>...</a> để tạo liên kết tới sp1.htm-->
					<!--thẻ p này dùng để cố định chiều cao dòng 2, và để ảnh căn giữa-->
					<p class="card-text text-dark">Giá:
						<?= number_format($row["price"]) ?> VNĐ
					</p>
					<i class="text-dark fa fa-shopping-cart me-3"></i> <a href="?module=cart&act=add&masp=<?= $row["id"] ?>"
						class="btn btn-primary"> Mua hàng</a>
				</div>
			</div>

			<?php
		}
		?> 
		
		<div class="pager" style="padding-left:500px; margin:20px;">
		
		<?php
		if(isset($_REQUEST["sell"]))
			$link .= "&sell=$sell";
		//tính vị trí trang trước
		$page = (($current_page-1)>0)?($current_page-1):1;
		if($_REQUEST["page"] == 1)
		{
			$CSS_OffButtonDau = " class='OffButton'";
			$CSS_OffButtonTruoc = " class='OffButton'";
		}
		else
		{
			$CSS_OffButtonDau = "href='?module=sanpham$link&page=1'";
			$CSS_OffButtonTruoc = "href='?module=sanpham$link&page=$page'";
		}
		
		?>
		
		<a class="text-light" <?=$CSS_OffButtonDau?> style="color:red;"> Đầu </a>
		<a class="text-light" <?=$CSS_OffButtonTruoc?> "> <i class="pagination-item__icon fas fa-angle-left" ></i> </a> 
		<?php
		for($page=1; $page<=$total_pages; $page++)
		{
			$CSS_curPage = ($page==$current_page)?" class='curPage' ": "";
		
		?>
		<a class="text-light" href="?module=sanpham<?=$link?>&page=<?=$page?>" <?=$CSS_curPage?>> <?=$page?></a> 
		<?php
		}
		//tính vị trí trang tiếp
		$page = (($current_page+1)<=$total_pages)?($current_page+1):$total_pages;
		if($_REQUEST["page"] == $total_pages)
		{
			$CSS_OffButtonCuoi = " class='OffButton'";
			$CSS_OffButtonTiep = " class='OffButton'";
		}
		else
		{
			$CSS_OffButtonCuoi = "href='?module=sanpham$link&page=$total_pages'";
			$CSS_OffButtonTiep = "href='?module=sanpham$link&page=$page'";
		}
		?>
		<a class="text-light" <?=$CSS_OffButtonTiep?> > <i class="pagination-item__icon fas fa-angle-right" ></i> </a>
		<a class="text-light" <?=$CSS_OffButtonCuoi?> > Cuối </a>
	</div>
	</div>
</div>