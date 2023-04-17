<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherBookingType extends Model
{
    protected $table = 'other_booking_types';
    
    protected $fillable = [
    	'name',
    ];
}
