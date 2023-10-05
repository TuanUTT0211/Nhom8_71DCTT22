<div class="d-flex justify-content-center">
        <div id="content_right" class="col-8"> 
        	<h1 > QUẢN LÝ HÓA ĐƠN</h1>
            <h2> Thông tin mua hàng</h2>
            <div id="right_detail">
				<?php
                $trangthai="";
                if($rowHD["trangthai"]==0)
                    $trangthai = "HĐ mới";
                else if($rowHD["trangthai"]==1)
                    $trangthai = "Đã duyệt";
                else if($rowHD["trangthai"]==2)
                    $trangthai = "Đã Thanh toán";
                else if($rowHD["trangthai"]==3)
                    $trangthai = "Tạm hủy";
                ?>
                <div class="card" style="width: 60rem;">
                <ul class="list-group list-group-flush">
                <li class="list-group-item"> Mã hóa đơn: <b> <?=$id?> </b></li>
                <li class="list-group-item"> Tên người mua: <b> <?=$rowHD["tennguoimua"]?> </b></li>
                <li class="list-group-item"> Địa chỉ :<b> <?=$rowHD["diachi"]?> </b></li>
                <li class="list-group-item"> Điện thoại :<b> <?=$rowHD["dienthoai"]?> </b></li>
                <li class="list-group-item"> Ngày đặt :<b> <?=$rowHD["ngaydat"]?> </b></li>
                <li class="list-group-item"> Ngày nhận :<b> <?=$rowHD["ngaynhan"]?> </b></li>
                <li class="list-group-item"> ID khách Hàng :<b> <?=$rowHD["cusid"]?> </b></li>
                <li class="list-group-item"> Trạng thái :<b> <?=$trangthai?> </b>
                <select class="form-select" name="sTT" id="sTT" onChange="sTT_Change(this.value);">
                    <option value="" selected> Đổi trạng thái HĐ</option>
                    <option value="0"> Hóa đơn mới</option>
                    <option value="1"> Hóa đơn đã duyệt</option>
                    <option value="2"> Hóa đơn đã thanh toán</option>
                    <option value="3"> Hóa đơn tạm hủy</option>
                </select>
                </ul>
                </div>
                <script>
                function sTT_Change(new_value)
                {
                 if(new_value!="")
                  window.location.href=
                   "?module=<?=$module?>&act=trangthai&id=<?=$id?>&ttht=<?=$rowHD["trangthai"]?>&ttmoi="+new_value;
                }
                </script>
                </p>
                <p> Tổng tiền :<span style="color:red; font-weight:bold"> 
						<?=number_format($tongtien)?> VNĐ</span>
                </p>
                <h3> Danh sách mặt hàng</h3>
                <table id="example" class="table table-striped table-hover table-bordered table align-middle">
                  <thead>
                  <tr>
                    <td>STT</td>
                    <td>Mã SP</td>
                    <td>Tên sản phẩm</td>
                    <td>Tác giả</td>
                    <td> Giá mua</td>
                    <td>Số lượng</td>
                    <td>Thành tiền</td>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $rows = $hoadon->data;
                  $stt=0;
                    foreach($rows as $row)
                    {
                        $stt++;
                  ?>
                  <tr>
                    <td><?=$stt?></td>
                    <td><?=$row["masp"]?></td>
                    <td><?=$row["title"]?></td>
                    <td><?=$row["author"]?></td>
                    <td><?=number_format($row["giamua"])?></td>
                    <td><?=$row["soluong"]?></td>
                    <td><?=number_format($row["giamua"]*$row["soluong"])?></td>
                  </tr>
                  <?php
                    }
                  ?>
                  </tbody>
                </table>
			</div>
        </div>
</div>