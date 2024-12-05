<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Fundamental of UX for Application Design',
            'category' => 'User Experience',
            'description' => 'The automated process handles all your website tasks efficiently.',
            'image' => 'assets/img/gallery/featured1.png',
            'price' => 135,
            'rating' => 4.5, // Simpan dalam format desimal
        ]);

        Course::create([
            'title' => 'Advanced Laravel Techniques',
            'category' => 'Web Development',
            'description' => 'Deep dive into advanced concepts and optimization in Laravel.',
            'image' => 'assets/img/gallery/featured2.png',
            'price' => 200,
            'rating' => 4.8, // Simpan dalam format desimal
        ]);

        Course::create([
            'title' => 'Frontend Development Mastery',
            'category' => 'Web Design',
            'description' => 'Master HTML, CSS, JavaScript for modern web designs.',
            'image' => 'assets/img/gallery/featured3.png',
            'price' => 120,
            'rating' => 4.6, // Simpan dalam format desimal
        ]);
    }
}
