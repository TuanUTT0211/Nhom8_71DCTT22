		
        <div class="d-flex flex-column bd-highlight mb-3 text-dark"> 
        	
            	<h3 class="text-dark">SẢN PHẨM MỚI</h3>
                <?php
				require_once("Models/clsSanpham.php");
				$sanpham = new clsSanpham();
				$ketqua = $sanpham->LaySanphamMoiNhat(3);//lấy 3 sản phẩm mới nhất
				$rows = $sanpham->data;
				foreach($rows as $row)
				{
					$hinhanh = $row["images"];
					if($hinhanh=="")
						$hinhanh = "no-Image.png";
					$trangthai="";
					if($row["status"]==1)
						$trangthai = "có";
					else
						$trangthai = "không";
				?>
                <div class="p-2 my-3 bd-highlight card "  style="width: 10 rem;"> 
                	<a class="card-link" href="?module=chitietsanpham&manhom=<?=$row["cat_id"]?>&masp=<?=$row["id"]?>">
                	<img src="Hinhanh/Sanpham/<?=$hinhanh?>" class="card-img-top"><br>
                    </a>
                	<a style="text-decoration: none;" href="?module=chitietsanpham&manhom=<?=$row["cat_id"]?>&masp=<?=$row["id"]?>"><h5 class="card-title text-dark"><?=$row["title"]?></h5></a>
                </div>
                <?php
				}
				?>
            
            
        </div>