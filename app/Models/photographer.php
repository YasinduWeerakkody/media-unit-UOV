<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photographer extends Model
{
    use HasFactory;

    
    protected $fillable=[
            'local_id',
            'Fullname',
            'academic_year',
            'experience_time',
            'company_name',
            'courses',
            'devices',
            'email',
            'contact_number',
    ];

}
