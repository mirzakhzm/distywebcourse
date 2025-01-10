@extends('master')

@section('konten')
<main>
    <div class="courses-area section-padding40 fix mt-5">
        <div class="container">
            <div class="row">
                @if($message)
                    <div class="alert alert-warning">
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