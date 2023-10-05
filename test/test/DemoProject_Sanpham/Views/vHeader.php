<header class="container-fluid bg-dark">
    <div class="row flex-nowrap">
        <nav class="navbar  navbar-expand-sm navbar-dark bg-dark ">
            <div class="container">
                <a class="navbar-brand" href="index_admin.php">
                    <img class="figure-img img-fluid rounded" src="https://media.istockphoto.com/id/1192884194/vi/vec-to/k%C3%BD-t%C3%AAn-qu%E1%BA%A3n-tr%E1%BB%8B-tr%C3%AAn-bi%E1%BB%83u-t%C6%B0%E1%BB%A3ng-m%C3%A1y-t%C3%ADnh-x%C3%A1ch-tay-vector-ch%E1%BB%A9ng-kho%C3%A1n.jpg?s=612x612&w=0&k=20&c=GwOSJZWBf8nU3JsEKH0RZmve-E62xF8KExSqSVi9SYY=" width="75px" alt="hinh anh" />
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index_admin.php" aria-current="page">Trang chủ<span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin tức</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="?module=tintuc">Danh sách Tin tức</a>
                                <a class="dropdown-item" href="?module=tintuc&act=them">Thêm tin tức</a>

                            </div>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý nhóm sản phẩm</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="?module=nhomsp">Danh sách Sản phẩm</a>
                                <a class="dropdown-item" href="?module=nhomsp&act=them">Thêm sản phẩm</a>

                            </div>
                            
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý sản phẩm</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="?module=sanpham">Danh sách Sản phẩm</a>
                                <a class="dropdown-item" href="?module=sanpham&act=them">Thêm sản phẩm</a>

                            </div>
                            
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý khách hàng</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="?module=user">Danh sách khách hàng</a>
                                <a class="dropdown-item" href="?module=user&act=them">Thêm khách hàng</a>

                            </div>
                            
                        </li>
                        

                        <li class="nav-item">
                            <a class="nav-link" href="?module=hoadon">Quản lý hóa đơn</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-white">Xin chào: <b><?= isset($_SESSION["user"]) ? $_SESSION["user"] : "" ?></b></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item"><?= isset($_SESSION["user"]) ? "<a href='logout.php'>Đăng xuất</a>" : "<a href='login.php'>Đăng nhập</a>" ?></a>>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>

    </div>
</header>