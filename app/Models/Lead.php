<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'first_name',
         'last_name',
         'street_address',
         'home',
         'property_type',
         'existing_insurer',
         'date_of_birth',
         'current_insurer',
         'email',
         'phone',
    ];
                                
    public static function allLeads(Request $request)
    {
        return $request->only((new self())->fillable);
    }

}
