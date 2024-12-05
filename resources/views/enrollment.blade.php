@extends('master')

@section('header')
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
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
                                            <li><a href="/courses">Courses</a></li>
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                            <!-- Button -->
                                            <li class="button-header margin-left"><a href="/register" class="btn">Join</a></li>
                                            <li class="button-header"><a href="/login" class="btn btn3">Log in</a></li>
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
@endsection

@section('konten')
    <main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Enrollment courses</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                                            <li class="breadcrumb-item"><a href="enroll"> Enrollment Courses</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>

        {{--enrollment form --}}
        <div class="row justify-content-center" style="padding-top:8%; padding-bottom:12%;">
            <div class="col-lg-8">
                <form action="{{ route('enrollment.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- Name Input -->
                        <div class="col-sm-6 mt-3">
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Enter your name" required style="font-size: 14px; padding: 20px; width: 100%;">
                            </div>
                        </div>
                        <!-- Email Input -->
                        <div class="col-sm-6 mt-3">
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Enter your email" required style="font-size: 14px; padding: 20px; width: 100%;">
                            </div>
                        </div>
                        <!-- Contact Input -->
                        <div class="col-sm-12 mt-3">
                            <div class="form-group">
                                <input class="form-control" name="contact" type="number" placeholder="Enter your contact" required style="font-size: 14px; padding: 20px; width: 100%;">
                            </div>
                        </div>      
                        <!-- Pilihan Input -->
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <select class="form-control" name="paket" id="paket">
                                    <option value="" disabled selected>Pilihan Paket</option>
                                    <option value="pelatihan_online">Pelatihan Online(Rp 100.000)</option>
                                    <option value="pelatihan_offline">Pelathan Offline(Rp 250.000)</option>
                                    <option value="pelatihan_sertifikasi">Pelatihan & Sertifikasi (Rp1.700.000)</option>
                                </select>
                            </div>
                        </div>
                        <!-- Hidden Course ID Input -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn" style="font-size: 18px; padding: 10px 25px; width: 100%;">Send</button>
                    </div>
                </form>                                                 
            </div>
        </div>
        
    </main>
@endsection