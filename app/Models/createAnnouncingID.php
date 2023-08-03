<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createAnnouncingID extends Model
{
    use HasFactory;

    protected $fillable=[
          'announcingID',
          'memberID',
          'AdminCreateID',
          'Fullname',
    ];
}
