<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Văn phòng phẩm AGU</title>

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
    </head>
    <body id="top">
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"><i class="bi bi-shop-window"></i> ABC Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Trang chính</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Giới thiệu</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Danh mục sản phẩm</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Sản phẩm</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Danh mục 1</a></li>
                                <li><a class="dropdown-item" href="#!">Danh mục 2</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="#" class="btn btn-outline-light"><i class="bi bi-person"></i> Đăng nhập</a>&nbsp;
                        <a href="#" class="btn btn-outline-light" ><i class="bi bi-cart3"></i> Giỏ hàng <span class="badge bg-danger text-white ms-1 rounded-pill">0</span></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Section-->        
        <section class="py-5">            
            <div class="container px-4 px-lg-5 mt-1">
<!-- Cắt TOP từ trên đến đây -->
                <h3 class="text-info">Tất cả sản phẩm</h3>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php for($i=0; $i<12; $i++){ ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Giảm giá</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="../images/products/m1.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder text-info">Tên sản phẩm</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">300.000đ</span>
                                    <span class="text-danger fw-bolder">270.000đ</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-info mt-auto" href="#">Chọn mua</a></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                              
                </div>
                <ul class="pagination justify-content-center" style="margin:20px 0">
                    <li class="page-item"><a class="page-link" href="#"><i class="bi bi-caret-left-fill"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="bi bi-caret-right-fill"></i></a></li>
                </ul>
<!-- Cắt BOTTOM từ đây đến hết -->
            </div>
        </section>
        <!-- Carousel -->
        <div id="demo" class="carousel slide shadow" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
        
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/carousel/h1.jpg" alt="Dụng cụ văn phòng" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="../images/carousel/h2.jpg" alt="Dụng cụ học tập" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="../images/carousel/h3.jpg" alt="Văn phòng phẩm" class="d-block w-100">
            </div>
            </div>
        
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-info">
            <div class="text-center mb-5"><a class="text-warning" href="#top"><i class="bi bi-chevron-up"  style="font-size: 3rem; font-weight: bold; color:white;"></i></a></div>
            
            <div class="container">
                <div class="row">
                    <div class="col-6 text-light">
                        <h4><span class="badge text-white bg-success">A</span>
                            <span class="badge text-white bg-danger">B</span>
                            <span class="badge text-white bg-warning">C</span> Shop - Cửa hàng văn phòng phẩm</h4>
                        <p><b><i>Địa chỉ:</i></b> 18 Ung Văn Khiêm, phường Đông Xuyên, TP Long Xuyên, An Giang<br>
                            <b><i>Điện thoại:</i></b> 076 3841190<br> 
                            <b><i>Email:</i></b> abc@abc.com</p>
                    </div>
                    <div class="col-3 text-muted">
                        <h4>DANH MỤC HÀNG</h4>
                        <a href="#" class="list-group-item">Liên kết</a>
                        <a href="#" class="list-group-item">Liên kết</a>
                        <a href="#" class="list-group-item">Liên kết</a>
                    </div>
                    <div class="col-3 text-muted">
                        <h4>DỊCH VỤ KHÁCH HÀNG</h4>
                        <a href="#" class="list-group-item">Hướng dẫn mua hàng</a>
                        <a href="#" class="list-group-item">Câu hỏi thường gặp</a>
                        <a href="#" class="list-group-item">Liên hệ với chúng tôi</a>
                    </div>
                </div>
                <hr>
                <p class="m-0 text-center text-warning fw-bolder">Copyright &copy; ABC Shop 2023</p></div>
        </footer>

    </body>
</html>
