
    	<div class="container table-responsive">
			<br>
			<br>
    		<h1> QUẢN LÝ HÓA ĐƠN</h1>
    		<h2> DANH SÁCH HÓA ĐƠN</h2>
    		<div>
    			<?php
				if ($ketqua) {
				?>
    				<table id="example" class="table table-striped table-hover table-bordered table align-middle">
    					<thead>
    						<tr>
    							<td>Id KH</td>
    							<td>Họ tên</td>
    							<td>Địa chỉ</td>
    							<td>Điện thoại</td>
    							<td>Ngày đặt</td>
    							<td>Ngày nhận</td>
								<td>ID khách hàng</td>
    							<td>Tổng tiền</td>
    							<td>Trạng thái</td>
    							<td style="width: 120px;">Act</td>
    						</tr>
    					</thead>
    					<tbody>
    						<?php
							$rows = $hoadon->data;
							foreach ($rows as $row) {
								$trangthai = "";
								if ($row["trangthai"] == 0)
									$trangthai = "Hóa đơn mới";
								else if ($row["trangthai"] == 1)
									$trangthai = "Đã duyệt";
								else if ($row["trangthai"] == 2)
									$trangthai = "Đã Thanh toán";
								else if ($row["trangthai"] == 3)
									$trangthai = "Tạm hủy";

							?>

    							<tr>
    								<td><a href="?module=<?= $module ?>&act=chitiet&id=<?= $row["mahd"] ?>"> <?= $row["mahd"] ?> </a></td>
    								<td><?= $row["tennguoimua"] ?></td>
    								<td><?= $row["diachi"] ?></td>
    								<td><?= $row["dienthoai"] ?></td>
    								<td><?= $row["ngaydat"] ?></td>
    								<td><?= $row["ngaynhan"] ?></td>
									<td><?= $row["cusid"] ?></td>
    								<td><?= number_format($hoadon->TongTien($row["mahd"])) ?></td>
    								<td><?= $trangthai ?></td>
    								<td class="text-center">
    									<?php
										if ($row["trangthai"] != 2)
											echo "<a class='btn btn-success' href='?module=" . $module . "&act=xoa&id=" . $row["mahd"] . "'>Xóa</a> - ";
										else
											echo " ";
										?>
    									<a class="btn btn-danger" href="?module=<?= $module ?>&act=chitiet&id=<?= $row["mahd"] ?>"> Chi tiết </a>
    								</td>
    							</tr>
    					
    				<?php
							}
					?>
					</tbody>
    				</table>
    			<?php
				}
				?>
    		</div>
    	</div>