<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nettys</title>
    <link rel="stylesheet" href="{{ asset('gallery_css/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('gallery_css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('gallery_css/css/templatemo-style.css') }}">

</head>
<body>
<!-- Page Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand navbar-dark" href="{{('/')}}">
            <i class="fas fa-pepper-hot"></i>
            Netty's
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation navbar-dark bg-dark">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent navbar-dark bg-dark">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0 navbar-dark bg-dark">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="{{('/')}}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="{{('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="{{('/')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="{{('/')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="tm-hero d-flex justify-content-center" data-parallax="scroll" data-image-src="{{asset('gallery_css/img/IMG-20210619-WA0000 1.png')}}">
</div>

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">
            Our Gallery
        </h2>
        <div class="col-6 d-flex justify-content-end align-items-center">
        </div>
    </div>
    <div class="row tm-mb-90 tm-gallery">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/banner-bg.jpg')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/blog-1.jpg')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/DSC_9117.png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/gallery-1.jpg')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/orange.png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/recipes-1.jpg')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/IMG-20210618-WA0018%202.png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/recipes-5.jpg')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/WhatsApp%20Image%202021-10-05%20at%2017.18%205.png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">

            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/IMG-20210619-WA0000%202.png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/seated.png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/WhatsApp%20Image%202021-10-05%20at%2017.18%201.png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/WhatsApp%20Image%202021-10-05%20at%2017.18%205.png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/WhatsApp%20Image%202021-10-05%20at%2017.18.png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/WhatsApp%20Image%202021-10-05%20at%2017.22.png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="{{asset('gallery_css/img/WhatsApp%20Image%202021-10-05%20at%2017.25%201%20(1).png')}}" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
            </div>
        </div>
    </div> <!-- row -->
    <div class="row tm-mb-90">
        <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
            <div class="tm-paging d-flex">
            </div>
        </div>
    </div>
</div> <!-- container-fluid, tm-container-content -->

<footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
    <div class="container-fluid tm-container-small">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                <h3 class="tm-text-primary mb-4 tm-footer-title">Netty's Culinary School</h3>
                <p>Netty's Culinary is a premium culinary school in Harare, Zimbabwe. Contact Us and change your culinary skills</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                <h3 class="tm-text-primary mb-4 tm-footer-title">Our Links</h3>
                <ul class="tm-footer-links pl-0">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                    <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                </ul>
                <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                Copyright 2022 Native Designs. All rights reserved.
            </div>
            <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                Designed by <a href="https://nativedesigns.co.zw" class="tm-text-gray" rel="sponsored" target="_parent">Native Designs ZW</a>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('gallery_css/js/plugins.js')}}"></script>
<script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
</script>
</body>
</html>
