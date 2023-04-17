<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OtherBooking;
use App\Models\OtherBookingType;

use Illuminate\Support\Facades\Redirect;

class OtherBookingController extends Controller
{
	public function index()
	{
		$other_bookings = OtherBooking::orderBy('date','DESC')->get();
		$other_booking_types = OtherBookingType::all();
		
		$statistics =[
			"january" => 234,
			"april" => OtherBooking::where('booking_type',1)->sum('sum') - OtherBooking::where('booking_type',0)->sum('sum')
		];
		
		return view('otherbooking',compact('other_bookings','other_booking_types','statistics'));
	}
	
    public function store(Request $request)
    {
    	$booking = OtherBooking::create($request->all());
    	return Redirect::to("/other")->with('message', "Buchung gespeichert.");
    }
}
