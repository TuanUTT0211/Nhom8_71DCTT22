<div class="d-flex justify-content-center" >
    	<div id="content_right">
    		<h1> QUẢN LÝ USER</h1>
    		<div id="Right_Search">
    			<?php
				$tukhoa = isset($_REQUEST["tTukhoa"]) ? $_REQUEST["tTukhoa"] : "";
			 
				?>
    		</div>
    		<div class="table-responsive">
    			<table id="example" class="table table-striped table-hover table-bordered table align-middle">
					<thead class="bg-dark text-white">
    				<tr>
    					<td> id </td>
    					<td> Username </td>
    					<td> Fullname </td>
    					<td> Tel </td>
                        <td> Email </td>
    					<td> Trạng thái </td>
    					<td> Thao tác </td>
    				</tr>
					</thead>
					<tbody>
    				<?php
					$rows = $sanpham->data;
					foreach ($rows as $row) {
						 
						$trangthai = "";
						if ($row["status"] == 1)
							$trangthai = "có";
						else
							$trangthai = "không";
					?>
    					<tr>
    						<td> <?= $row["cusid"] ?> </td>
    						<td> <?= $row["user"] ?> </td>
    						<td> <?= $row["fullname"] ?> </td>
    						<td> <?= $row["tel"] ?></td>
    						<td> <?= $row["email"] ?></td>
    						<td> <?= $trangthai ?> </td>
    						<td>  <a class="btn btn-secondary" href="?module=<?= $module ?>&act=sua&id=<?= $row["cusid"] ?>"> Sửa </a>
    							- <a class="btn btn-danger" href="?module=<?= $module ?>&act=xoa&id=<?= $row["cusid"] ?>" onClick="return confirm('Chắc chắn xóa?');"> Xóa </a> </td>
    					</tr>
    				<?php
					}
					?>
					</tbody>
    			</table>
    		</div>
    	</div>
</div>