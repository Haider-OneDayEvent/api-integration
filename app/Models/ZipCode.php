<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    protected $fillable = [
        'zipCode', 
        'city',
        'county',
        'stateCode',
        'latitude',
        'longitude',
    ];
}
