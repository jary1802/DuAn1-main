<?php ob_start();?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="" sizes="16x16" href="clients/assets/logo/logo111.png">
    <title>Nước Hoa Cao Cấp - Zelist  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="assets/logo/logo111.png">
    <link rel="shortcut icon" href="assets/logo/logo111.png">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="./clients/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./clients/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./clients/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">



</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="#">Hỗ trợ</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block text-center">

                <a href="./" class="text-decoration-none">

                    <h1 class="m-0 display-5 font-weight-semi-bold">
                    <img src="https://sdmntprwestus3.oaiusercontent.com/files/00000000-4e7c-61fd-98f0-e238940319dc/raw?se=2025-07-19T20%3A54%3A14Z&sp=r&sv=2024-08-04&sr=b&scid=e49d0a48-b2a5-52d6-9459-6e43416a1772&skoid=f71d6506-3cac-498e-b62a-67f9228033a9&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-07-19T02%3A22%3A39Z&ske=2025-07-20T02%3A22%3A39Z&sks=b&skv=2024-08-04&sig=iFBk2irSvO827Wy/Q/6wAKnHc22194kpT9oETubhtSU%3D" alt="Logo" style="max-width: 100%; height: 150px">
                    </h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
            <form action="index.php" method="GET" class="d-flex">
                <input type="hidden" name="act" value="search">
                <div class="input-group">
                    <input type="text" 
                        name="keyword" 
                        class="form-control" 
                        placeholder="Tìm kiếm sản phẩm..." 
                        value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>"
                        required>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

            
            <div class="col-lg-3 col-6 text-right">
                <a href="#" class="btn border">
                    <i class="fas fa-bell"></i>
                    <!-- <span class="badge badge-primary">4</span> -->
                </a>
                <a href="?act=view-shopping-cart" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <!-- <span class="badge badge-primary">0</span> -->
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

