<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;


    protected $fillable=[
     
        'Firstname',
        'Lastname',
        'staff_number',
        'faculty',
        'department',
        'email',
        'mobile_number', 
        'password',
    ];

}
