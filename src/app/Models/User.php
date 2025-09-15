<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['status', 'role'];

    // Các thuộc tính có giá trị mặc định
    protected $attributes = [
        'status' => 'active', // Giá trị mặc định cho 'status' là
        'role' => 'user', // Giá trị mặc định cho 'role' là
    ];
}
