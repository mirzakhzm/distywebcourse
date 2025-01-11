<?php

// app/Models/Enrollment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $table = 'enrollments';
    protected $fillable = ['name', 'email', 'contact', 'paket', 'course_id',];
    

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');  // Relasi dengan User berdasarkan user_id
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id'); // Relasi belongsTo dengan Course
    }
}
