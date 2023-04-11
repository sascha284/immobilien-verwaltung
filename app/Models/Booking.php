<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
//    use HasFactory;
    
    protected $table = 'bookings';
    
    protected $fillable = [
    	'estate_id',
    	'booking_type',
    	'booking_type_id',
    	'bank_account_id',
		'sum',
		'date',
    ];  
}
