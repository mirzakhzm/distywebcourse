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
    <!--? slider Area Start-->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- User Profile Section -->
                    <form action="{{ route('user.update') }}" method="POST">
                        @csrf
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="row">
                            <!-- Username -->
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input class="form-control" name="name" type="text" 
                                        value="{{ old('name', auth()->user()->name) }}" 
                                        required style="font-size: 14px; padding: 20px; width: 100%;">
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" name="email" type="email" 
                                        value="{{ old('email', auth()->user()->email) }}" 
                                        required style="font-size: 14px; padding: 20px; width: 100%;">
                                </div>
                            </div>
                            <!-- New Password -->
                            <div class="col-sm-12 mt-3">
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input class="form-control" name="new_password" type="password" 
                                        placeholder="Enter new password" 
                                        style="font-size: 14px; padding: 20px; width: 100%;">
                                </div>
                            </div>
                            <!-- Confirm Password -->
                            <div class="col-sm-12 mt-3">
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input class="form-control" name="confirm_password" type="password" 
                                        placeholder="Confirm new password" 
                                        style="font-size: 14px; padding: 20px; width: 100%;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection