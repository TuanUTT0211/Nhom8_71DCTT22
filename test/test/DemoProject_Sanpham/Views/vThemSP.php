<div class="d-flex justify-content-center">
<div id="content_right">
  <h1> QUẢN LÝ SẢN PHẨM</h1>
  <h2> THÊM SẢN PHẨM</h2>
  <div  class=" container">
    <form class="form-floating" name="form1" method="post" action="?module=<?= $module ?>&act=xulythem" enctype="multipart/form-data">
      <div class="container">
        <div class="mb-3 row">
          <label class="form-label">Loại Rượu:</label>
          <div>
            <select class="form-select" name="s1" id="s1">
              <option value="0"> Chọn loại rượu</option>
              <?php
              require_once("Models/clsCategory.php");
              require_once("DungChung/Tienich.php");
              $nps = new clsCategory();
              $nps->LayDanhSachNhomSanpham(2, 0); //lấy tất cả nhóm SP
              ShowOptions($nps->data, "cat_id", "cat_name", 0);
              ?>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="form-lable" >Tên Rượu:</label>
          <input class="form-control" type="text" name="t1" id="t1">
        </div>
        <div class="mb-3 row">
          <label class="form-lable">Thương hiệu:</label>
          <input class="form-control"  type="text" name="t2" id="t2">
        </div>
        <div class="mb-3 row">
          <label class="form-lable" height="30">Giá:</label>
          <input class="form-control" type="text" name="t3" id="t3">
        </div>
        <div>
          <label for="f1" class="form-lable" >Hình ảnh:</label>
          <input class="form-control" type="file" name="f1" id="f1">
        </div>
        <div>
          <label  class="form-lable"  valign="top">Xuất xứ:</label>
          <textarea class="form-control"  name="t4" id="t4" rows="5" ></textarea>
        </div>
        <div>
          <label class="form-lable"  valign="top">Nồng độ:</label>
          <textarea class="form-control" name="t4a" id="t4a" rows="5" cols="50"></textarea>
        </div>
        <div>
          <label class="form-lable" valign="top">Dung tích:</label>
          <textarea class="form-control" name="t4b" id="t4b" rows="5" cols="50"></textarea>
        </div>
        <div>
          <label height="30" valign="top">Chi tiết:</label>
          <textarea class="form-control" class="form-control" name="t5" id="t5" ></textarea>
        </div>
        <div>
          <td height="30">Trạng thái:</td>
          <td>
            Có <input type="radio" name="rTrangthai" id="r1" value="1" checked> &nbsp;
            Không <input type="radio" name="rTrangthai" id="r2" value="0">
          </td>
        </div>
        <div>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="button" id="button" value="Đồng ý"></td>
        </div>
      </div>
    </form>
    <script language="javascript">
      var ckNoidung = CKEDITOR.replace('t5');
      ckNoidung.config.width = 600;
      CKFinder.setupCKEditor(ckNoidung, null, {
        type: 'Images'
      });
    </script>
  </div>
</div>
</div>