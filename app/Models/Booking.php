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
		'extra_costs',
		'date',
    ];  
    
    public function estate()
    {
        return $this->hasOne(Estate::class,'id','estate_id');
    }
    
    public function bookingtype()
    {
        return $this->hasOne(BookingType::class,'id','booking_type_id');
    }    
}
