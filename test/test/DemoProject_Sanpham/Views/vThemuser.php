<div class="d-flex justify-content-center">
<div id="content_right">
  <h1> QUẢN LÝ User</h1>
  <h2> THÊM USER</h2>
  <div  class=" container">
    <form class="form-floating" name="form1" method="post" action="?module=<?= $module ?>&act=xulythem" enctype="multipart/form-data">
      <div class="container">
      
        <div class="mb-3 row">
          <label class="form-lable" >Username:</label>
          <input class="form-control" type="text" name="t1" id="t1">
        </div>
        <div class="mb-3 row">
          <label class="form-lable" >Password:</label>
          <input class="form-control" type="text" name="t2" id="t2">
        </div>
        <div class="mb-3 row">
          <label class="form-lable">Full name:</label>
          <input class="form-control"  type="text" name="t3" id="t3">
        </div>
        <div class="mb-3 row">
          <label class="form-lable" height="30">Tel:</label>
          <input class="form-control" type="text" name="t4" id="t4">
        </div>
         
        <div>
          <label  class="form-lable"  valign="top">Email:</label>
          <textarea class="form-control"  name="t6" id="t6" rows="5" ></textarea>
        </div>
         
        
        <div>
          <label height="30" valign="top">Address:</label>
          <textarea class="form-control" class="form-control" name="t5" id="t5" ></textarea>
        </div>
        <div>
          <td height="30">Status:</td>
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