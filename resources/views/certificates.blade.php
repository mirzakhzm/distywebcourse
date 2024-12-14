@extends('master')

@section('konten')
<main>
    <!-- Slider Area Start -->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Certificates</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a>Home</a></li>
                                        <li class="breadcrumb-item"><a>Certificates</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section>
    <!-- Slider Area End -->

    <!-- Certificates Area Start -->
    <div class="courses-area section-padding40 fix">
        <div class="container">
            <div class="row">
                @foreach($certificates as $certificate)
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <!-- Pemanggilan gambar sertifikat -->
                                    <a href="{{ asset('storage/' . $certificate->file) }}" download>
                                        <img src="{{ asset('storage/' . $certificate->file) }}" alt="Certificate" class="certificate-img">
                                    </a>
                                    
                                </div>                                
                                <div class="properties__caption">
                                    <h3>{{ $certificate->title }}</h3>
                                    <p>Diterbitkan Pada: {{ $certificate->created_at->format('d M Y') }}</p>
                                    <p>Peserta: {{ $certificate->user->name }}</p>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                </div>
                                    <a href="{{ asset('storage/' . $certificate->file) }}" class="border-btn border-btn2" download>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Certificates Area End -->
</main>
@endsection
