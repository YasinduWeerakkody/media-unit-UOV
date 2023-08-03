<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phographyIdCreator extends Model
{
    use HasFactory;

    protected $fillable=[
        'photographyID',
        'memberId',
        'NewAdminCreateID',
        'fullname',
    ];
}
