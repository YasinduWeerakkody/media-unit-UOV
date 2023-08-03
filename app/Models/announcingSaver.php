<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announcingSaver extends Model
{
    use HasFactory;

    protected $fillable=[
        'localId',
        'title',
        'url',
        'description',
    ];
}
