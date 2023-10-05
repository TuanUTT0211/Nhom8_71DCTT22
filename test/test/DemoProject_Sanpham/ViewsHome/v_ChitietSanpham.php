        <div class="row col-1 col-md-10 col-lg-10 col-xl-10 mx-auto mt-3  d-flex flex-shrink-0 p-3 bg-light">
          <div class="col-1 col-md-10">
            <h1>Thông tin về rượu</h1>
            <hr>
            <?php
            if ($sanpham->data == NULL)
              echo "<H2>KHÔNG TÌM THẤY SẢN PHẨM</H2>";
            else {
              $row = $sanpham->data;
              $hinhanh = $row["images"];
              if ($hinhanh == "")
                $hinhanh = "no-Image.png";
            ?>
              <div id="content_sp"  >
                <div class="row justify-content-start">
                  <div class="col-1 col-sm-2 col-md-2 mx-2 card " style="width: 18rem;">
                    <p><a style="text-decoration: none;" href="#"><?= $row["title"]; ?></a></p><!-- thẻ <a href>...</a> để tạo liên kết tới sp1.htm-->
                    <p><a href="#"><img src="Hinhanh/Sanpham/<?= $hinhanh ?>" class="card-img-top"></a></p> <!--thẻ p này dùng để cố định chiều cao dòng 2, và để ảnh căn giữa-->
                  </div>
                  <div class=" tomtatsanpham card col-1 col-sm-5 col-md-7 " style="width:670px;" >
                    <h2> Thông tin sản phẩm</h2>
                    <div class="noidung_tomtat" style="margin:10px; padding:10px;">
                      <ul class="list-group list-group-flush"   >
                        <li class="list-group-item">Thương hiệu: <?= $row["author"] ?></li>
                        <li class="list-group-item"> Xuất xứ: <?= $row["summary"] ?> </li>
                        <li class="list-group-item"> Nồng Độ: <?= $row["concentration"] ?> % </li>
                        <li class="list-group-item"> Dung tích: <?= $row["capacity"] ?> ml </li>
                      </ul>
                    </div>
                    <h3>Giá: <?= number_format($row["price"]) ?> VNĐ</h3>
                    <h3><i class="fa fa-shopping-cart"></i><a href="?module=cart&act=add&masp=<?= $row["id"] ?>"> Mua hàng</a></h3>
                  </div>
                </div>
                
                <div class="chitietsanpham "   >
                  <div class="card text-dark" >
                    <h2 class="card-title">CHI TIẾT SẢN PHẨM</h2>
                    <p class="card-text text-dark" > <?= $row["content"] ?> </p>
                  </div>

                </div>
              </div>
            <?php
            }
            ?>
          </div>
          <div class="col-1 col-md-2 float-end"><?php
                                                include("ViewsHome/inc_Right.php");
                                                ?></div>

        </div>