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
                                                <li class="button-header margin-left"><a href="/" class="btn">kembali</a></li>
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
    <div class="courses-area section-padding40 fix mt-5">
        <div class="container">
            <div class="row">
                @if($message)
                <div class="alert alert-warning" style="text-align: center; padding: 10px; margin: 200px auto; max-width: 600px;">
                    {{ $message }}
                </div>
            @endif
                    <!-- Menampilkan data enrollments jika ada -->
                    @foreach($enrollments as $enrollment)
                        <div class="col-lg-4">
                            <div class="properties properties2 mb-30">
                                <div class="properties__card">
                                    <div class="properties__img overlay1">
                                        <img src="{{ asset('storage/' . $enrollment->course->image) }}" alt="Course Image">
                                    </div>
                                    <div class="properties__caption">
                                        <p>{{ $enrollment->course->category }}</p>
                                        <h3><a href="#">{{ $enrollment->course->title }}</a></h3>
                                        <p>{{ $enrollment->course->description }}</p>
                                        <div class="properties__footer d-flex justify-content-between align-items-center">
                                            <div class="restaurant-name">
                                                <div class="rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= floor($enrollment->course->rating)) 
                                                            <i class="fas fa-star"></i> <!-- Bintang penuh -->
                                                        @elseif ($i == ceil($enrollment->course->rating) && $enrollment->course->rating - floor($enrollment->course->rating) >= 0.5)
                                                            <i class="fas fa-star-half"></i> <!-- Setengah bintang -->
                                                        @else
                                                            <i class="far fa-star"></i> <!-- Bintang kosong -->
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</main>