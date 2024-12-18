@extends('master')

@php
    $hideHeader = true;
@endphp

<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 py-4">
                            <div class="logo">
                                <a href="/"><img src="assets/img/logo/distylogo.png" class="img-fluid" style="max-width: 180px;" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 py-4">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                            <!-- Button -->
                                            <li class="button-header margin-left"><a href="register" class="btn">Join</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>                
        </div>
    </div>
    <!-- Header End -->
</header>

@section('konten')
<main>
    <section class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center" style="background-color: white;">
                <div class="container">
                    <div class="row">
                        <!-- Welcome Message -->
                        <div class="col-xl-6 col-lg-7 col-md-12" style="margin-top: 60px">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay="0.2s" style="color: black;">Selamat Datang<br>di Disty Academy</h1>
                            </div>
                        </div>
                        <!-- Login Form -->
                        <div class="col-xl-6 col-lg-7 col-md-12">
                            <div class="card py-5 px-5" style="border: 3px solid #ddd; border-radius: 8px;">
                                <h2 class="text-center mb-4">Masuk ke Disty Academy</h2>
                                <p class="text-center">Saya ingin masuk sebagai</p>

                                <div class="login-option mb-3" style="border: 1px solid #ddd; border-radius: 8px; padding: 15px; cursor: pointer; display: flex; align-items: center;">
                                    <img src="assets/img/logo/peserta.png" alt="Pencari Kos" style="border-radius: 50%; margin-right: 15px;">
                                    <a href="/login" style="text-decoration: none; color: inherit;">
                                        <span style="font-size: 1.5rem; font-weight: 500;">Peserta</span>
                                    </a>
                                </div>
                                <div class="login-option" style="border: 1px solid #ddd; border-radius: 8px; padding: 15px; cursor: pointer; display: flex; align-items: center;">
                                    <img src="assets/img/logo/admin.png" alt="Pemilik Kos" style="border-radius: 50%; margin-right: 15px;">
                                    <a href="/admin" style="text-decoration: none; color: inherit;">
                                        <span style="font-size: 1.5rem; font-weight: 500;">Admin</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Login Form -->
                    </div>
                </div>          
            </div>
        </div>
    </section>
</main>


@endsection