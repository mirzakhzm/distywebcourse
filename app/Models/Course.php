<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $tables = 'Enrollment';
    protected $fillable = ['title', 'category','description','image','price','rating'];
}
