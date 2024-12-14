@extends('master')

@section('header')
<header>
    <div class="header-area header-transparent">
        <div class="main-header">
            <div class="header-bottom header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="/home"><img src="assets/img/logo/distylogo.png" class="img-fluid" style="max-width: 180px;" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('courses') }}">Courses</a></li>
                                            <li><a href="{{ route('about') }}">About</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                            @auth
                                                <li class="button-header">
                                                    <a href="{{ route('logout') }}">Logout</a>
                                                </li>
                                            @endauth
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('konten')
<main>
    <section class="logout-section section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="logout-content text-center">
                        <h2>Are you sure you want to log out?</h2>
                        <p>If you log out, you will need to log back in to access your account.</p>
                        <div class="logout-buttons">
                            <form action="{{ route('user.logout') }}" method="POST" class="d-inline-block">@csrf
                                <button type="submit" class="btn btn-danger">Yes, Log Out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
