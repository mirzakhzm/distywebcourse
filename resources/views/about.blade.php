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
                                    <a href="/"><img src="assets/img/logo/distylogo.png" class="img-fluid" style="max-width: 180px;" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="courses">Courses</a></li>
                                                <li><a href="about">About</a></li>
                                                <li><a href="contact">Contact</a></li>
                                                <!-- Button -->
                                                <li class="button-header margin-left"><a href="register" class="btn">Join</a></li>
                                                <li class="button-header"><a href="login" class="btn btn3">Log in</a></li>
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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">About us</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                                            <li class="breadcrumb-item"><a href="about">about</a></li> 
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
        <div class="services-area services-area2 section-padding40">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>60+ UX courses</h3>
                                <p>The automated process all your website tasks.</p>
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
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Life time access</h3>
                                <p>The automated process all your website tasks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? About Area-1 Start -->
        <section class="about-area1 fix" style="padding-bottom: 100px; padding-top: 100px;" >
            <div class="support-wrapper align-items-center">
                <div class="left-content1">
                    <div class="about-icon">
                        <img src="assets/img/icon/about.svg" alt="">
                    </div>
                    <!-- Bagian Judul -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Disty Academy</h2>
                            <p>Disty Academy adalah lembaga pelatihan kerja yang
                                didedikasikan untuk memberikan pembekalan
                                keterampilan, pengetahuan dan sikap kerja yang
                                diperlukan untuk berhasil di dunia kerja sesuai dengan
                                Standar Kompetensi Kerja Nasional Indonesia (SKKNI).
                                Dengan berbagai program pelatihan yang disesuaikan
                                dengan kebutuhan industri dan dunia kerja, kami
                                bertujuan untuk membantu individu mewujudkan potensi
                                terbaik mereka.</p>
                        </div>
                    </div>

                    {{-- Bagian Visi --}}
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Visi</p>
                        </div>
                    </div>
                    
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/circle-fill.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Menjadi Lembaga pelatihan nasional yang terbaik, 
                            terkemuka dan terpercaya dalam memberikan menyelenggarakan pendidikan 
                            dan pelatihan berbasis kompetensi sesuai dengan Standar Kompetensi Kerja
                            Nasional Indonesia (SKKNI).</p>
                        </div>
                    </div>

                    {{-- Bagian Misi --}}
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Misi</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/circle-fill.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Mendukung pengembangan sumberdaya manusia yang unggul dan berdaya saing</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/circle-fill.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Melaksanakan pendidikan dan pelatihan berbasis kompetensi sesuai dengan SKKNI</p>
                        </div>
                    </div>
                    
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/circle-fill.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Menyelenggarakan pelatihan sesuai dengan kebutuhan pelanggan 
                                serta mengikuti perkembangan zaman, agar dapat
                                mendukung pertumbuhan dan pengembangan bisnis perusahaan 
                                klien</p>
                        </div>
                    </div>
                    
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/circle-fill.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Menyediakan fasilitas dan lingkungan belajar 
                                yang kondusif untuk pertumbuhan dan perkembangan 
                                individu</p>
                        </div>
                    </div>
                    
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/circle-fill.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Memberikan pelayanan terbaik 
                            yang mengutamakan kepuasan pelanggan</p>
                        </div>
                    </div>
                    
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/circle-fill.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Memfasilitasi sertifikasi kompetensi Badan Nasional Sertifikasi Profesi (BNSP) Republik Indonesia</p>
                        </div>
                    </div>
                </div>

                {{-- Konten sebelah kanan --}}
                <div class="right-content1">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about.png" alt="">

                        <div class="video-icon">
                                <iframe width="620" height="315" src="https://www.youtube.com/embed/u9DBDb2TvMk?si=ZJhUgg2EWzGyvX8S&amp;controls=0" title="YouTube video player" frameborder="10" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                                {{-- <i class="fas fa-play"></i> --}}
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->

        <!--? About Area-3 Start -->
        <section class="about-area3 fix">
            <div class="support-wrapper align-items-center">
                <div class="right-content3">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about3.png" alt="">
                    </div>
                </div>
                <div class="left-content3">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">Keunggulan Kami</h2>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Instruktur Berpengalaman & Tersertifikasi BNSP RI</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Fasilitas Modern</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Kerjasama Industri Nasional</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Bersertifikat BNSP Republik Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->

        <!--? Team -->
        <section class="team-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Instruktur Disty Academy</h2>
                        </div>
                    </div>
                </div>
                <div class="team-active">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Drs. Purwanto, M.Si.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team2.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Drs. Mochammad Saleh, M.Si.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Bayu Pancoroadi, ST.,MT.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team4.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Miftahul Ulum, ST., M.Si.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mochamad Samsukadi, Lc., M.Th.I.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Galuh Tisna Widiana, M.Pd.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">.M. Yusuf Wibowo, ST.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">M. Ali Murtadlo, M.Kom.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Chandra Sukma Anugrah, M.Kom.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Wiwit Denny Fitriana, M.Si.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Dr. Nur Ulwiyah, M.Pd.I.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">.Dr. Miftakhul Ilmi S. Putra, M.Pd.</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Dr. Dhikrul Hakim, M.Pd.I</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Dr. Moh. Makmun, M.HI</a></h5>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mahmud Huda, M.S.I.</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
    </main>
@endsection