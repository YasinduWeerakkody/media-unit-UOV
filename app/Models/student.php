<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable=[
        'Firstname',
        'Lastname',
        'registration_number',
        'faculty',
        'email',
        'mobile_number',
        'academic_year',
        'password',
    ];
        

    
}
