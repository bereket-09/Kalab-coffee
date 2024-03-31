<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'image', 
        'price', 
        'category',    
        'status',
    ];
    use HasFactory;
}
