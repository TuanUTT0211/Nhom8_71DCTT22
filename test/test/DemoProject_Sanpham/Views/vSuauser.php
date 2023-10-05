<?php
if($sanpham->data==NULL)
{
	$thongbao ="không tìm thấy thông tin";
	require("Views/vKetqua.php");
}
else
{
?>    
    	<div id="content_left"> 
        	<div class="left1">
            	<h3>CHỨC NĂNG</h3>
                <p><a href="?module=<?=$module?>&act=them">Thêm User</a></p>
                <p><a href="?module=<?=$module?>">Danh sách User</a></p>
                <p><a href="?module=<?=$module?>#">Thống kê</a></p>
            </div>

        </div>
        <div id="content_right"> 
        	<h1> QUẢN LÝ User</h1>
            <h2> SỬA Thông tin của user</h2>
            <div id="right_detail">
            <?php 
				$row = $sanpham->data;
			?>
			<form name="form1" method="post" action="?module=<?=$module?>&act=xulysua"  enctype="multipart/form-data">
				<input type="hidden" name="id" id="id" value="<?=$id?>">
			  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
				 
                <tr>
				  <td width="142" height="30">Username:</td>
				  <td width="258"><input type="text" name="t1" id="t1"  value="<?=$row["user"];?>"></td>
				</tr>
				<tr>
				  <td height="30">Password:</td>
				  <td><input type="text" name="t2" id="t2"  value="<?=$row["pass"]?>"></td>
				</tr>
				<tr>
				  <td height="30">Full name:</td>
				  <td><input type="text" name="t3" id="t3"  value="<?=$row["fullname"]?>"></td>
				</tr>
                <tr>
				  <td height="30">Tel:</td>
				  <td><input type="text" name="t4" id="t4"  value="<?=$row["tel"]?>"></td>
				</tr>
                 <tr>
                  <td height="30" valign="top">Address:</td>
                  <td><textarea name="t5" id="t5" rows="5" cols="50"><?=$row["adress"]?></textarea></td>
                </tr>
                <tr>
				  <td height="30">Email:</td>
				  <td><input type="text" name="t6" id="t6"  value="<?=$row["email"]?>"></td>
				</tr>
                <tr>
                  <td height="30">Trạng thái:</td>
                  <td>
                  Có <input type="radio" name="rTrangthai" id="r1" value="1"  <?=($row["status"]==1)?"checked":""?>> &nbsp;
                  Không <input type="radio" name="rTrangthai" id="r2" value="0" <?=($row["status"]==0)?"checked":""?>>
                  </td>
                </tr>
				<tr>
                  <td></td>
				  <td><input type="submit" name="button" id="button" value="Đồng ý"></td>
				</tr>
			  </table>
			</form>
            <div class="mb-3 row">
          <label class="form-label">Danh sách hóa đơn:</label>
          <div>
          <div class="table-responsive">
          <table id="example" class="table table-striped table-hover table-bordered table align-middle">
          <thead class="bg-dark text-white">
    				<tr>
    					<td> Mã đơn </td>
    					<td> Tên người mua </td>
    					<td> Ngày đặt </td>
    					<td> Ngày nhận </td>
                        
    					<td> Trạng thái </td>
    					<td> Chi tiết </td>
    				</tr>
                    </thead>
					<tbody>
              <?php
              require_once("Models/clscustomer.php");
              require_once("DungChung/Tienich.php");
              $nps = new clscus();
              $nps->LayDShoadontheouser(2,$id); //lấy tất cả nhóm SP
              $rows = $nps->data;
              foreach ($rows as $row) {
                
                $trangthai = "";
                if ($row["trangthai"] == 1)
                    $trangthai = "có";
                else
                    $trangthai = "không";
              ?>
                      <tr>
    						
    						<td> <?= $row["mahd"] ?> </td>
    						<td> <?= $row["tennguoimua"] ?> </td>
                            <td> <?= $row["ngaydat"] ?> </td>
    						<td> <?= $row["ngaynhan"] ?>  </td>
    						<td> <?= $trangthai ?> </td>
    						<td>  <a class="btn btn-secondary" href="?module=hoadon&act=chitiet&id=<?= $row["mahd"] ?>"> chi tiết </a>
    							 
    					</tr>
    				<?php
					}
					?>
                    	
					</tbody>
    			</table>
    		</div>
          </div>
        </div>
			 
			</div>
        </div>
<?php
}
?>