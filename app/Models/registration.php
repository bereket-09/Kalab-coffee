<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{

    protected $fillable = [
        'event_id',
        'name',
        'address',
        'phone_number',
        'email',
        'note',
        'status',
        'payment_status',
        'dietary_restrictions',
        'emergency_contact',
        'date_of_birth',
        'tshirt_size',
        'special_requirements',
        'referral_source',
        'social_media_profiles',
        'additional_notes',
        'registration_date',
    ];
    use HasFactory;
}
