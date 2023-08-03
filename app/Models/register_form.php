<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register_form extends Model
{
    use HasFactory;

    protected $fillable=[
        'Firstname',
        'Lastname',
        'registration_number',
        'age',
        'academic_year',
        'faculty',
        'department',
        'contact_number',
        'birthdate',
        'address',
        'city',
        'province',
        'district',
        'gender',
        'postal_code',
        'username',
        'email',
        'password',
    ];
}
