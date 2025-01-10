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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Contact us</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a>Home</a></li>
                                            <li class="breadcrumb-item"><a>Contact</a></li> 
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
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="{{ route('feedback.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" type="text" placeholder="Enter your name" required style="font-size: 14px; padding: 20px; width: 100%;">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email" placeholder="Enter your email" required style="font-size: 14px; padding: 20px; width: 100%;">
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" type="message" placeholder="Enter your message" required 
                                            style="font-size: 14px; padding: 25px; width: 100%; height: 200px;"></textarea>
                                    </div>
                                </div>                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Gedung Graha Pena Lt. 5 Jl. Ahmad
                                    Yani No. 88</h3>
                                <p>Surabaya, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>085-731-785-411</h3>
                                <p>Mon to Fri 8am to 4pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@distyindonesia.com
                                </h3>
                                <p>Send us your question anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
@endsection