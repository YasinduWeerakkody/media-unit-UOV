<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagesaver extends Model
{
    use HasFactory;

    protected $fillable=[
        // localid,
        'title',
        'url',
        'description',
    ];
}
