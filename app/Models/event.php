<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{

    protected $fillable = [
        'name',
        'location',
        'description',
        'date_and_time',
        'status',
        'organizer_name',
        'organizer_contact',
        'category',
        'capacity',
        'price',
        'duration',
        'image',
        'tags',
        'visibility',
        'city',
        'state',
        'country',
        'latitude',
        'longitude',
        'registration_deadline',
    ];

    
    use HasFactory;
}
