<div class="d-flex justify-content-center" >
    	<div id="content_right">
    	    <h1> QUẢN LÝ NHÓM SẢN PHẨM</h1>
    	    <h2> DANH SÁCH NHÓM SẢN PHẨM</h2>
    	    <div id="right_detail">
    	        <table id="example" class="table table-striped table-hover table-bordered table align-middle">
    	            <thead>
    	                <tr>
    	                    <td> cat_id </td>
    	                    <td> Tên nhóm </td>
    	                    <td> Thứ tự </td>
    	                    <td> Trạng thái </td>
    	                    <td> Thao tác </td>
    	                </tr>
    	            </thead>
    	            <tbody>
    	                <?php
                        $rows = $Nhomsanpham->data;
                        foreach ($rows as $row) {
                            $trangthai = "";
                            if ($row["cat_status"] == 0)
                                $trangthai = "Không hiển thị";
                            else if ($row["cat_status"] == 1)
                                $trangthai = "Có hiển thị";
                        ?>
    	                    <tr>
    	                        <td> <?= $row["cat_id"] ?> </td>
    	                        <td> <?= $row["cat_name"] ?> </td>
    	                        <td> <?= $row["cat_ord"] ?> </td>
    	                        <td> <?= $trangthai ?></td>
    	                        <td> <a class="btn btn-secondary" href="?module=<?= $module ?>&act=sua&id=<?= $row["cat_id"] ?>"> Sửa </a>
    	                            - <a class="btn btn-danger" href="?module=<?= $module ?>&act=xoa&id=<?= $row["cat_id"] ?>" onClick="return confirm('Chắc chắn xóa?');"> Xóa </a> </td>
    	                    </tr>
    	                <?php
                        }
                        ?>
    	            </tbody>
    	        </table>
    	    </div>
    	</div>
</div>