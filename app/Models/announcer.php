<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announcer extends Model
{
    use HasFactory;

    protected $fillable=[
        'local_id',
        'Fullname',
        'academic_year',
        'experience_time',
        'courses',
        'event',
        'email',
        'contact_number',
        'path',
    ];
}
