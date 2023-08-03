<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article_writers extends Model
{
    use HasFactory;

       protected $fillable=[
        'local_id',
        'Fullname',
        'academic_year',
        'article_name',
        'experience_time',
        'digital_post',
        'email',
        'contact_number',
    ];
}
