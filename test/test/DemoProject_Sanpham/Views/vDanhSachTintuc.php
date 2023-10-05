<div class="container-fluid ">
<br>
    <br>
    <h2 class="text-center"> DANH SÁCH TIN TỨC</h2>
    <br>
    <br>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-8 col-md-8 col-lg-8" >
            <table id="example" class="table table-striped table-hover table-bordered table align-middle">
                <thead >
                    <tr >
                        <td> id </td>
                        <td> Tiêu đề </td>
                        <td> Tóm tắt </td>
                        <td> Hình ảnh </td>
                        <td> Ngày đăng </td>
                        <td> Trạng thái </td>
                        <td style="width: 80px;" > Thao tác </td>
                    </tr >
                </thead>
                <tbody>
                    <?php
                    $rows = $tintuc->data;
                    foreach ($rows as $row) {
                    ?>
                        <tr>
                            <td> <?= $row["id"] ?> </td>
                            <td> <?= $row["tieude"] ?> </td>
                            <td> <?= $row["tomtat"] ?> </td>
                            <td> <?= $row["hinhanh"] ?></td>
                            <td> <?= $row["ngaytao"] ?></td>
                            <td> <?= $row["trangthai"] ?></td>
                            <td> <a class="btn btn-secondary" href="?module=<?= $module ?>&act=sua&id=<?= $row["id"] ?>"> Sửa </a>
                                - <a class="btn btn-danger" href="?module=<?= $module ?>&act=xoa&id=<?= $row["id"] ?>" onClick="return confirm('Chắc chắn xóa?');"> Xóa </a> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>