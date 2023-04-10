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
		$bookings = Booking::all();
		$booking_types = BookingType::all();
		$estates = Estate::all();
		return view('booking',compact('bookings','estates','booking_types'));
	}
	
    public function store(Request $request)
    {
    	$booking = Booking::create($request->all());
    	return Redirect::to("/")->with('message', "Buchung gespeichert.");
    }
}
