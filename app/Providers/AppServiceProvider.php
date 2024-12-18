<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use App\Models\Course;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // public function boot(): void
    // {
    //     // Menggunakan View Composer untuk mengirim data ke semua view yang membutuhkan
    //     View::composer('index', function ($view) {
    //         // Ambil data courses dari database
    //         $courses = Course::all(); // Ambil data course dari model Course
            
    //         // Pass data ke view
    //         $view->with('courses', $courses);
    //     });
    // }
}

