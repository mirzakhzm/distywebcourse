<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    
    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'user_id'); // Pastikan 'user_id' adalah foreign key di tabel certificates
    }
}
