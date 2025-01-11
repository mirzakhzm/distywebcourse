@extends('master')


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
                                            <li class="breadcrumb-item"><a>Home</a></li>
                                            <li class="breadcrumb-item"><a>about</a></li> 
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

                <!--? About Area-1 Start -->
        <section class="about-area1 fix" style="margin-bottom: 7%; margin-top: 2%;" >
            <div class="support-wrapper align-items-center">
                <div class="left-content1">
                    <div class="about-icon">
                        <img src="assets/img/icon/about.svg" alt="">
                    </div>

                    {{-- Bagian Visi --}}
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/circle-fill.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Visi</p>
                        </div>
                    </div>
                    
                    <div class="single-features">
                        <div class="text-justify">
                            <p>Menjadi Lembaga pelatihan nasional yang terbaik, 
                            terkemuka dan terpercaya dalam memberikan menyelenggarakan pendidikan 
                            dan pelatihan berbasis kompetensi sesuai dengan Standar Kompetensi Kerja
                            Nasional Indonesia (SKKNI).</p>
                        </div>
                    </div>

                    {{-- Bagian Misi --}}
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/circle-fill.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Misi</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="text-justify">
                            <p>Mendukung pengembangan sumberdaya manusia yang unggul dan berdaya saing</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="text-justify">
                            <p>Melaksanakan pendidikan dan pelatihan berbasis kompetensi sesuai dengan SKKNI</p>
                        </div>
                    </div>
                    
                    <div class="single-features">
                        <div class="text-justify">
                            <p>Menyelenggarakan pelatihan sesuai dengan kebutuhan pelanggan 
                                serta mengikuti perkembangan zaman, agar dapat
                                mendukung pertumbuhan dan pengembangan bisnis perusahaan 
                                klien</p>
                        </div>
                    </div>
                    
                    <div class="single-features">
                        <div class="text-justify">
                            <p>Menyediakan fasilitas dan lingkungan belajar 
                                yang kondusif untuk pertumbuhan dan perkembangan 
                                individu</p>
                        </div>
                    </div>
                    
                    <div class="single-features">
                        <div class="text-justify">
                            <p>Memberikan pelayanan terbaik 
                            yang mengutamakan kepuasan pelanggan</p>
                        </div>
                    </div>
                    
                    <div class="single-features">
                        <div class="text-justify">
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

        <!-- Management Section -->
        <section class="management-area section-padding40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Manajemen Kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single Team Member Card -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card text-center shadow">
                            <img class="card-img-top" src="assets/img/management/management(1).png" alt="Chandra S. Anugrah" style="width: 100%; height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Chandra S. Anugrah, M.Kom.</h5>
                                <p class="card-text">Komisaris</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card text-center shadow">
                            <img class="card-img-top" src="assets/img/management/management(2).png" alt="Wiwit Denny Fitriana" style="width: 100%; height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Wiwit Denny Fitriana, M.Si.</h5>
                                <p class="card-text">Direktur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card text-center shadow">
                            <img class="card-img-top" src="assets/img/management/management(3).png" alt="Galuh Tisna Widiana" style="width: 100%; height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Galuh Tisna Widiana, M.Pd.</h5>
                                <p class="card-text">Manajer Pelatihan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card text-center shadow">
                            <img class="card-img-top" src="assets/img/management/management(4).png" alt="Dr. Nur Ulwiyah" style="width: 100%; height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Dr. Nur Ulwiyah, M.Pd.</h5>
                                <p class="card-text">Manajer Mutu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card text-center shadow">
                            <img class="card-img-top" src="assets/img/management/management(5).png" alt="Mochamad Samsukadi" style="width: 100%; height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Mochamad Samsukadi, M.Th.I</h5>
                                <p class="card-text">Manajer Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card text-center shadow">
                            <img class="card-img-top" src="assets/img/management/management(6).png" alt="Ely Kristiana" style="width: 100%; height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Ely Kristiana, SE.</h5>
                                <p class="card-text">Manajer Administrasi & Keuangan</p>
                            </div>
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