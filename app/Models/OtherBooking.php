<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherBooking extends Model
{
    protected $table = 'other_bookings';
    
    protected $fillable = [
    	'booking_type',
    	'other_booking_type_id',
    	'bank_account_id',
		'sum',
		'date',
    ];
}
