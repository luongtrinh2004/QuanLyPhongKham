<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Các cột có thể gán giá trị hàng loạt
    protected $fillable = [
        'name',
        'age',
        'email',
    ];
}
