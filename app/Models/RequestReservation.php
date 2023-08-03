<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestReservation extends Model
{
    use HasFactory;

    protected $fillable=[
        'regid',
        'fullname',
        'regOrstaffNo',
        'acedamicyr',
        'faculty',
        'department',
        'venue',
        'email',
        'eventdate',
        'contactno',
        'wanted',
    ];

    protected $casts=[
        'wanted'=>'array'
    ];
}
