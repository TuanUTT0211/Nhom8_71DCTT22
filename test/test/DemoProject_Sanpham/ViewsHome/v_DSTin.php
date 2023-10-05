<div class="container">
			<br>
        	<h5 class=" text-center">
        		<?php 
					echo "DANH SÁCH TIN";
				?>
        	</h5>
        	<?php
			if ($tin->data == NULL)
				echo "<h5>KHÔNG TÌM THẤY TIN</h5>";
			?>
        	<div class="row d-flex justify-content-around mx-auto mt-3">
        		<?php
				$rows = $tin->data;
				foreach ($rows as $row) {
					$hinhanh = $row["hinhanh"];
					if ($hinhanh == "")
						$hinhanh = "no-Image.png";
					$trangthai = "";
					if ($row["trangthai"] == 1)
						$trangthai = "có";
					else
						$trangthai = "không";
				?>

        			<div class=" d-grid gap-3 card text-center mt-5" style="width: 18rem;">
        				<a class="card-link" href="?module=chitiettintuc&id=<?=$row["id"]?>"><img src="Hinhanh/Tintuc/<?= $hinhanh ?>" class="card-img-top"></a>
        				<div class="card-body">
        					<h5 class="card-title"><a style="text-decoration: none;" href="?module=chitiettintuc&id=<?=$row["id"]?>" class="card-link"><?= $row["tieude"] ?></a></h5><!-- thẻ <a href>...</a> để tạo liên kết tới sp1.htm-->
        					<!--thẻ p này dùng để cố định chiều cao dòng 2, và để ảnh căn giữa-->
        					
        				</div>
        			</div>

        		<?php
				}
				?>
        	</div>
        </div>