@extends('master')

@section('konten')
    <main>
        <!--? slider Area Start-->
        <section class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Online course<br> platform</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Build skills with courses and certificates online from world-class companies</p>
                                    <a href="courses" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- ? services-area -->
        <div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>15+ Courses</h3>
                                <p>A wide range of courses designed to enhance your skills and knowledge.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon2.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Expert instructors</h3>
                                <p>Learn from industry experts with years of experience in their fields.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>2 Month access</h3>
                                <p>Enjoy unlimited access to all courses for two months.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our featured courses</h2>
                        </div>
                    </div>
                </div>
                <div class="courses-actives">
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured1.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process handles all your website tasks efficiently.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                    </div>
                                    {{-- <div class="price">
                                        <span>Rp.100.000</span>
                                    </div> --}}
                                </div>
                                <a href="courses" class="border-btn border-btn2">Lihat lebih banyak</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured2.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Advanced Laravel Techniques</a></h3>
                                <p>Deep dive into advanced concepts and optimization in Laravel.
                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                    </div>
                                    {{-- <div class="price">
                                        <span>Rp.130.000</span>
                                    </div> --}}
                                </div>
                                <a href="courses" class="border-btn border-btn2">Lihat lebih banyak</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured3.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Frontend Development Mastery</a></h3>
                                <p>Master HTML, CSS, JavaScript for modern web designs.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                    </div>
                                </div>
                                <a href="courses" class="border-btn border-btn2">Lihat lebih banyak</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        

        <!--? About Area-2 Start -->
        <section class="about-area2 fix pb-padding" style="padding-top: 100px; padding-bottom: 100px;">
            <div class="support-wrapper align-items-center">
                <div class="right-content2">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about2.png" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">Take the next step
                                toward your personal
                                and professional goals
                            with us.</h2>
                            <a href="courses" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Explore Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
@endsection