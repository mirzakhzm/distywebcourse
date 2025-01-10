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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Pembayaran</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Pembayaran</a></li> 
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
        <div class="row justify-content-center" style="padding-top:8%; padding-bottom:12%;">
            <div class="col-lg-8">
                <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Name Input -->
                        <div class="col-sm-6 mt-3">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" value="{{ $name }}" readonly style="font-size: 14px; padding: 20px;">
                            </div>
                        </div>
                        <!-- Email Input -->
                        <div class="col-sm-6 mt-3">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" value="{{ $email }}" readonly style="font-size: 14px; padding: 20px;">
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="form-group">
                                <input class="form-control" name="contact" id="contact" value="{{ $contact }}" readonly style="font-size: 14px; padding: 20px;">
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="form-group">
                                <input class="form-control" name="contact" id="paket" value="{{ $paket }}" readonly style="font-size: 14px; padding: 20px;">
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="form-group">
                                <input class="form-control" name="image" type="file" id="bukti_pembayaran" accept="image/*" required style="font-size: 12px; padding:15px; padding-bottom: 40px;">
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
