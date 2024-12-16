<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <title>Document</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-white bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand mx-5" href="#">
                <img src="<?php echo $this->config->item('url_logoblack'); ?>" alt="CariTukang" style="height: 40px;">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse custom-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link me-1" href="#">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-1" href="#">Pencapaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-1" href="#">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-1" href="#">About Us</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="btn btn-orange nav-link me-2 mb-2" href="#">Daftar Mitra</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="btn btn-primary nav-link" href="#">Booking</a>
                    </li>
                    <li class="nav-item d-none d-lg-flex">
                        <a class="btn btn-orange nav-link me-2 mx-5" href="#">Daftar Mitra</a>
                    </li>
                    <li class="nav-item d-none d-lg-flex">
                        <a class="btn btn-primary nav-link" href="#">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>