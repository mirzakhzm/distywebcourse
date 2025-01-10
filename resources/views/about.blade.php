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
        <!-- About Area-1 Start -->
<section class="about-area1 fix" style="padding-bottom: 100px; padding-top: 100px;">
    <div class="support-wrapper align-items-center" style="display: flex; justify-content: center;">
        <div class="left-content1" style="text-align: center;">
            <!-- Section Title -->
            <div class="section-tittle section-tittle2 mb-55">
                <div class="front-text">
                    <h2>Disty Akademi</h2>
                    <p>Disty Akademi adalah lembaga pelatihan kerja yang didedikasikan untuk memberikan pembekalan keterampilan, pengetahuan dan sikap kerja yang diperlukan untuk berhasil di dunia kerja sesuai dengan Standar Kompetensi Kerja Nasional Indonesia (SKKNI). Dengan berbagai program pelatihan yang disesuaikan dengan kebutuhan industri dan dunia kerja, kami bertujuan untuk membantu individu mewujudkan potensi terbaik mereka.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area-1 End -->

                {{-- Konten sebelah kanan --}}
                {{-- <div class="right-content1">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about.png" alt="">

                        <div class="video-icon">
                                <iframe width="620" height="315" src="https://www.youtube.com/embed/u9DBDb2TvMk?si=ZJhUgg2EWzGyvX8S&amp;controls=0" title="YouTube video player" frameborder="10" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div> --}}
            {{-- </div>
        </section> --}}
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
                    <img class="card-img-top" src="assets/img/management/management (1).png" alt="Chandra S. Anugrah">
                    <div class="card-body">
                        <h5 class="card-title">Chandra S. Anugrah, M.Kom.</h5>
                        <p class="card-text">Komisaris</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow">
                    <img class="card-img-top" src="assets/img/management/management (2).png" alt="Wiwit Denny Fitriana">
                    <div class="card-body">
                        <h5 class="card-title">Wiwit Denny Fitriana, M.Si.</h5>
                        <p class="card-text">Direktur</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow">
                    <img class="card-img-top" src="assets/img/management/management (3).png" alt="Galuh Tisna Widiana">
                    <div class="card-body">
                        <h5 class="card-title">Galuh Tisna Widiana, M.Pd.</h5>
                        <p class="card-text">Manajer Pelatihan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow">
                    <img class="card-img-top" src="assets/img/management/management (4).png" alt="Dr. Nur Ulwiyah">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Nur Ulwiyah, M.Pd.</h5>
                        <p class="card-text">Manajer Mutu</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow">
                    <img class="card-img-top" src="assets/img/management/management (5).png" alt="Mochamad Samsukadi">
                    <div class="card-body">
                        <h5 class="card-title">Mochamad Samsukadi, M.Th.I</h5>
                        <p class="card-text">Manajer Marketing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center shadow">
                    <img class="card-img-top" src="assets/img/management/management (6).png" alt="Ely Kristiana">
                    <div class="card-body">
                        <h5 class="card-title">Ely Kristiana, SE.</h5>
                        <p class="card-text">Manajer Administrasi & Keuangan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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