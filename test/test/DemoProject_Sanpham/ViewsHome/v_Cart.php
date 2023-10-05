		<section  class="container-fluid" style="background-color: whitesmoke;" id="thanhtoan"> <!-- không kèm <div id="content_right"> -->
			<br>
			<br>
			<h1 class="text-center" style="color:black">GIỎ HÀNG CỦA BẠN</h1>
			<?php
			//đếm số đầu sản phẩm trong giỏ hàng
			$count = 0;
			if (isset($_SESSION["cart"]))
				$count = count($_SESSION["cart"]); //đếm số phần tử của mảng cart
			if ($count == 0) {
			?>
				<p>Chưa có hàng trong giỏ</p>
				<?php
			} else //count>0
			{
				//tạo chuỗi chứa danh sách các id của sản phẩm từ giỏ hàng (để SELECT)
				$arr = array_keys($_SESSION["cart"]); //lấy ra danh sách các key của mảng cart
				$str = implode(",", $arr); //tạo chuỗi chứa các phần tử của mảng ngăn cách bởi dấu phẩy
				//tạo đối tượng clsSanpham
				$sanpham = new clsSanpham();
				$ketqua = $sanpham->TimTheo_DS_IDSanpham($str, 2);
				if ($ketqua == FALSE) {
					echo "<h2>Lỗi hiển thị sản phẩm từ CSDL</h2>";
				} else {
					$total = 0; //tổng tiền của tất cả sản phẩm trong giỏ hàng
					$rows = $sanpham->data;
				?>
					<div id='test'>

					</div>
					<div class="col-1 col-sm-4 col-md-6 col-lg-8  ">


						<form name="f1" id="f1" action="?module=cart&act=update" method="post">
							<table class=" table table-secondary table-striped text-center table-borderless table-responsive">
								<thead>
									<tr>
										<th scope="col">Hình ảnh</th>
										<th scope="col">Tên sản phẩm</th>
										<th scope="col"> Đơn giá</th>
										<th scope="col">Số lượng</th>
										<th scope="col">Thành tiền</th>
										<th scope="col">Xóa</th>
									</tr>
								</thead>

								<tbody>
									<?php
									foreach ($rows as $row) {
										$masp = $row["id"];
										$soluong = $_SESSION['cart'][$masp]; //số lượng của masp từ giỏ hàng
										$total += $soluong * $row["price"];

										$hinhanh = $row["images"];
										if ($hinhanh == "")
											$hinhanh = "no-Image.png";
									?>

										<tr>
											<td style="width: 170px;"><a href="#"><img src="hinhanh/Sanpham/<?= $hinhanh ?>" class=" img-thumbnail mx-auto d-block "></a></td>
											<td>
												<p class="cart_item_name"><a href="?module=chitietsanpham&manhom=<?= $row["cat_id"] ?>&masp=<?= $row["id"] ?>"> <?= $row["title"] ?> </a></p>
												<p class="cart_item_author">Hãng: <?= $row["author"] ?></p>
											</td>
											<td><?= number_format($row["price"]) ?> VNĐ</td>
											<td><input style="width: 50px;" type="number" name="qty[<?= $masp ?>]" value="<?= $soluong ?>" min="1"></td>
											<td><?= number_format($soluong * $row["price"]) ?> VNĐ</td>
											<td><a href="?module=cart&act=del&masp=<?= $row["id"] ?>" title="Xóa sản phẩm"> X </a></td>
										</tr>
									<?php
									}
									?>
								</tbody>


							</table>
						
						<div class="cart_update">
						  <input class="form-control" type="submit" name="capnhat"  value="Cập nhật giỏ hàng">  
						</div>
						</form>
						<div class="cart_total">
							Tổng tiền:<?= number_format($total) ?> VNĐ
						</div>

					</div>
					<hr>
					<h1 class="text-center text-dark">THANH TOÁN</h1>
					<hr>
					<div class="container d-block" style="width: 900px;">
						<script>
							function kt() {
								ngnhan = document.getElementById("ngnhan");
								diachi = document.getElementById("diachi");
								dienthoai = document.getElementById("dienthoai");
								if (diachi.value == "") {
									alert("Chưa nhập đủ thông tin");
									return false;
								}
								if (ngnhan.value == "") {
									ngnhan = document.getElementById("hoten");
									document.forms[2].submit()
								}
								if (dienthoai.value == "") {
									dienthoai = document.getElementById("dienthoai");
									document.forms[3].submit()
								}
							}
						</script>

						<?php
						require("KiemtraDangNhapuser.php");

						?>
						<form class="row g-3" style="color: black" name="f2" id="f1" action="?module=checkout" method="post" onSubmit="return kt();">
							<div class="row my-3">
								<div class="col">
									<label class="form-label">Họ tên người mua:(*)</label>
									<input class="form-control" type="text" name="hoten" id="hoten" value="<?= $_SESSION["name"] ?>" readonly>
								</div>

								<div class="col">
									<label class="form-label">Điện thoại người mua:</label>
									<input class="form-control" type="text" name="dtmua" id="dtmua"  value="<?= $_SESSION["tel"] ?>">
								</div>
							</div>
							<div class="row my-3">
								<div class="col">
									<label class="form-label">Họ tên người nhận:</label>
									<input class="form-control" type="text" name="ngnhan" id="ngnhan">
								</div>
								<div class="col">
									<label class="form-label">Điện thoại người nhận:</label>
									<input class="form-control" class="form-control" type="text" name="dienthoai" id="dienthoai"  value="<?= $_SESSION["tel"] ?>" >
								</div>
							</div>
							<div class="my-3" >
								<label class="form-label">Địa chỉ:(*)</label>
								<input class="form-control" type="text" name="diachi" id="diachi" value="<?= $_SESSION["adress"] ?>">
							</div>

							<div class="my-3"><label class="form-label">Chú thích:</label>
								<textarea class="form-control" name="note" id="note" rows="4" cols="39"> </textarea>
							</div>
							<div>
								<label class="form-label">Ngày nhận hàng:</label>
								<input class="form-control" type="date" name="ngaynhan" id="ngaynhan">
							</div>
							<label class="form-label">
								<input class="btn btn-success" class="form-control" type="submit" name="dathang" id="dathang" value="ĐỒNG Ý">
							</label>
						</form>
					</div>

			<?php
				} //if($ketqua==FALSE)
			} //đóng else //count>0
			?>

		</section> <!--content_center_2 -->