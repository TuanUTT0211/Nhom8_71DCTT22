 
          	<?php
			if ($sanpham->data == NULL)
				echo "<h5>KHÔNG TÌM THẤY SẢN PHẨM</h5>";
			else
				if ($act == "timkiem")
				echo "<h5>CÓ " . $soketqua . " SẢN PHẨM</h5>";
			else if ($tennhom != "")
				echo "<H2> Loại rượu cần tìm: " . $tennhom . "</H2>";

			?>
          <div >
            <div style="height:150px; overflow-y:scroll;">
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
        ?>
          <div class="cart_gallery">
             <div class="cart_item">
             <div class="cart_img">
             <a href="?module=chitietsanpham&manhom=<?= $row["cat_id"] ?>&masp=<?= $row["id"] ?>">
             <img src="hinhanh/Sanpham/<?= $hinhanh ?>">
               </a>
             </div>
        <div class="cart_info"> 
              <a href="?module=chitietsanpham&manhom=<?= $row["cat_id"] ?>&masp=<?= $row["id"] ?>"> <?= $row["title"] ?>
          </a>  
               </div> 
                                                </div>
                                            </div> 
                                                <?php
							}
							?>
                                              </div> </div>
                                               