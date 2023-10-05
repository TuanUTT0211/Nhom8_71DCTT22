<div class="d-flex justify-content-center" >
    	<div id="content_right">
    		<h1> QUẢN LÝ SẢN PHẨM</h1>
    		<div id="Right_Search">
    			<?php
				$tukhoa = isset($_REQUEST["tTukhoa"]) ? $_REQUEST["tTukhoa"] : "";
				$manhom = isset($_REQUEST["manhom"]) ? $_REQUEST["manhom"] : 0;
				?>
    		</div>
    		<div class="table-responsive">
    			<table id="example" class="table table-striped table-hover table-bordered table align-middle">
					<thead class="bg-dark text-white">
    				<tr>
    					<td> id </td>
    					<td> Tên Rượu </td>
    					<td> Thương Hiệu </td>
    					<td> Giá bán </td>
    					<td> Hình ảnh </td>
    					<td> Trạng thái </td>
    					<td> Thao tác </td>
    				</tr>
					</thead>
					<tbody>
    				<?php
					$rows = $sanpham->data;
					foreach ($rows as $row) {
						$hinhanh = $row["images"];
						if ($hinhanh == "")
							$hinhanh = "no-Image.png";
						$trangthai = "";
						if ($row["status"] == 1)
							$trangthai = "có";
						else
							$trangthai = "không";
					?>
    					<tr>
    						<td> <?= $row["id"] ?> </td>
    						<td> <?= $row["title"] ?> </td>
    						<td> <?= $row["author"] ?> </td>
    						<td> <?= $row["price"] ?> VNĐ </td>
    						<td align="center"> <img width="80" src="Hinhanh/Sanpham/<?= $hinhanh ?>"> </td>
    						<td> <?= $trangthai ?> </td>
    						<td>  <a class="btn btn-secondary" href="?module=<?= $module ?>&act=sua&id=<?= $row["id"] ?>"> Sửa </a>
    							- <a class="btn btn-danger" href="?module=<?= $module ?>&act=xoa&id=<?= $row["id"] ?>" onClick="return confirm('Chắc chắn xóa?');"> Xóa </a> </td>
    					</tr>
    				<?php
					}
					?>
					</tbody>
    			</table>
    		</div>
    	</div>
</div>