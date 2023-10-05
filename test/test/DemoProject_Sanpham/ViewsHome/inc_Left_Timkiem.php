			<div class="col-1 col-md-2 col-lg-2 col-xl-2 mx-auto mt-3  d-flex flex-column flex-shrink-0 p-3 bg-light" style="height:1000px;float:left">
			    <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
			        <svg width="40" height="32"><i class="fa-solid fa-magnifying-glass"></i></svg>
			        <span class="fs-4">Tìm kiếm</span>
			    </div>
				<hr>
			    <?php
                $tukhoa = isset($_REQUEST["tTukhoa"]) ? $_REQUEST["tTukhoa"] : "";
                $manhom = isset($_REQUEST["manhom"]) ? $_REQUEST["manhom"] : 0;
                ?>
				<div class="nav nav-pills flex-column mb-auto">
				<form class="mb-3" name="fTimkiem" id="fTiemkiem" action="index.php">
			        <input type="hidden" name="module" value="sanpham">
			        <input type="hidden" name="act" value="timkiem">
			        <label class="form-label">
			            Từ khóa:
			        </label>
			        <input class="form-control" type="text" placeholder="Nhập tên sản phẩm" name="tTukhoa" id="tTukhoa" value="<?= $tukhoa ?>">
					
					<br>
			        <label class="form-label">
			            Nhóm sản phẩm:
			            <select class="form-select form-select-sm" name="manhom" id="manhom">
			                <option value="0">Tất cả sản phẩm</option>
			                <?php
                            require_once("Models/clsCategory.php");
                            require_once("DungChung/Tienich.php");
                            $nps = new clsCategory();
                            //lấy nhóm SP trạng thái 1, sắp xếp theo thứu tự tăng dần
                            $nps->LayDanhSachNhomSanpham(1, 1);
                            ShowOptions($nps->data, "cat_id", "cat_name", $manhom);
                            ?>
			            </select>
			        </label>
					<br>
					<br>
					<button type="submit" class="btn btn-outline-secondary" name="bSearch" id="bSearch" value="Tìm kiếm">Tìm kiếm</button>
			    </form>
				</div>
			    
			</div>