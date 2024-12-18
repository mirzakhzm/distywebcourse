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
                    <div class="row align-items-center mt-4">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('/assets/img/logo/distylogo.png') }}" class="img-fluid" style="max-width: 180px;" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                                <li class="button-header margin-left"><a href="register" class="btn">Join</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12 text-center">
                            <div class="mobile_menu d-block d-lg-none"></div>
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
                                <h1 data-animation="fadeInLeft" data-delay="0.2s" style="color: black;">Masukkan<br>Akun Anda</h1>
                            </div>
                        </div>
                        <!-- Login Form -->
                        <div class="col-xl-6 col-lg-7 col-md-12">
                            <div class="card py-5 px-5" style="border: 3px solid #ddd; border-radius: 8px; ">
                                <form action="{{ route('login.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    @if(session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                            
                                    @if(session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('loginError') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                     @endif
                                
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" style="font-size: 1.4rem;" autofocus required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="password" name="password" style="font-size: 1.4rem;" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
                                </form>
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