<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingType extends Model
{
    protected $table = 'booking_types';
    
    protected $fillable = [
    	'name',
    ]; 
}
