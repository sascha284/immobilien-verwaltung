<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    protected $table = 'estates';
    
    protected $fillable = [
    	'address',
    ]; 
    
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }    
}
