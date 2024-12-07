<?php

// app/Models/Enrollment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $tables = 'Enrollment';
    protected $fillable = ['name', 'email','contact','paket','course_id'];

    // Relasi dengan model Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
