<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password','role'];
    protected $hidden = ['password', 'remember_token'];
    
    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'user_id'); // Pastikan 'user_id' adalah foreign key di tabel certificates
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'user_id');  // Relasi satu ke banyak dengan Enrollment
    }
}
