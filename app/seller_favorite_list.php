<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seller_favorite_list extends Model
{
    protected $fillable = [
        'id','sellerId','desingerId', 
    ];
}
