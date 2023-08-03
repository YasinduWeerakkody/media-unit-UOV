<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createArticalID extends Model
{
    use HasFactory;

    protected $fillable=[
        
          'articleID',
          'memberID',
          'AdminCreateID',
          'Fullname',
  ];
}
