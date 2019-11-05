<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontakt extends Model
{
    protected $fillable = [
        'user_id', 'lastname', 'firstname', 'address', 'housenumber', 'plz', 'stadt', 'tel'
    ];

}

