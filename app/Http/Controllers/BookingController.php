<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\BookingType;
use App\Models\Estate;

use Illuminate\Support\Facades\Redirect;

class BookingController extends Controller
{
	public function index()
	{
		$bookings = Booking::orderBy('date','DESC')->get();
		$booking_types = BookingType::all();
		$estates = Estate::all();
		
		$statistics =[
			"january" => 234,
			"april" => Booking::where('booking_type',1)->sum('sum') - Booking::where('booking_type',0)->sum('sum')
		];
		
		return view('booking',compact('bookings','estates','booking_types','statistics'));
	}
	
    public function store(Request $request)
    {
    	$booking = Booking::create($request->all());
    	return Redirect::to("/")->with('message', "Buchung gespeichert.");
    }
}
