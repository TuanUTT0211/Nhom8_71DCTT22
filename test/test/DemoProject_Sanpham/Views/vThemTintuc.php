
        <div class="container-fluid "> 
        	
            <h2 class="text-center m-5"> THÊM TIN TỨC</h2>
            <div class="row d-flex justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-8" >
            <form name="form1" method="post" action="?module=<?=$module?>&act=xulythem">
              
                <div>
                  <label class="form-label" width="120" height="30">Tiêu đề:</label>
                  <input class="form-control" type="text" name="t1" id="t1" size="80">
                </div>
                <div>
                  <label class="form-label">Tóm tắt:</label>
                  <textarea class="form-control" rows="5" cols="5" id="t2" name="t2"></textarea>
                </div>
                <div>
                  <label class="form-label">Nội dung:</label>
                  <textarea class="form-control" rows="5" cols="5" id="t3" name="t3"></textarea>
                </div>
                <div>
                  <label class="form-label">Hình ảnh:</label>
                  <td><input type="text" name="t4" id="t4" size="80"></td>
                </div>
                 <div>
                  <label class="form-label">Trạng thái:</label>
                  <input  class="form-check-input" type="checkbox" name="c1" id="c1" value="1">
                </div>
                <div>
                  <td></td>
                  <td><input class="btn btn-success" type="submit" name="button" id="button" value="Đồng ý"></td>
                </div>
              
            </form>

			</div>
            </div>
        </div>
