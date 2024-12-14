<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table = 'certificates'; // Pastikan nama tabel di database sesuai
    protected $fillable = ['user_id', 'course_id', 'file'];

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
