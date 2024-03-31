<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    protected $fillable = [
        'name',
        'profession',
        'image',    
        'content',    
        'status',
    ];
    use HasFactory;
}
