<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\BookingType;
use App\Models\Estate;

use Carbon\Carbon;

use Illuminate\Support\Facades\Redirect;

class BookingController extends Controller
{
	public function index()
	{
		$bookings = Booking::orderBy('date','DESC')->with('bookingtype')->with('estate')->get();
		$booking_types = BookingType::all();
		$estates = Estate::all();
		
		$statistics =[
			"january" => Booking::where('booking_type',1)->whereMonth('date', 1)->whereYear('date',Carbon::now()->year)->sum('sum') - Booking::where('booking_type',0)->whereMonth('date', 1)->whereYear('date',Carbon::now()->year)->sum('sum'),
			"february" => Booking::where('booking_type',1)->whereMonth('date', 2)->whereYear('date',Carbon::now()->year)->sum('sum') - Booking::where('booking_type',0)->whereMonth('date', 2)->whereYear('date',Carbon::now()->year)->sum('sum'),
			"march" => Booking::where('booking_type',1)->whereMonth('date', 3)->whereYear('date',Carbon::now()->year)->sum('sum') - Booking::where('booking_type',0)->whereMonth('date', 3)->whereYear('date',Carbon::now()->year)->sum('sum'),
			"april" => Booking::where('booking_type',1)->whereMonth('date', 4)->whereYear('date',Carbon::now()->year)->sum('sum') - Booking::where('booking_type',0)->whereMonth('date', 4)->whereYear('date',Carbon::now()->year)->sum('sum'),
			"may" => Booking::where('booking_type',1)->whereMonth('date', 5)->whereYear('date',2023)->sum('sum') - Booking::where('booking_type',0)->whereMonth('date', 5)->whereYear('date',2023)->sum('sum'),
			"june" => Booking::where('booking_type',1)->whereMonth('date', 6)->whereYear('date',Carbon::now()->year)->sum('sum') - Booking::where('booking_type',0)->whereMonth('date', 6)->whereYear('date',Carbon::now()->year)->sum('sum'),
		];
		//dd($bookings);
		return view('booking',compact('bookings','estates','booking_types','statistics'));
	}
	
    public function store(Request $request)
    {
    	$booking = Booking::create($request->all());
    	return Redirect::to("/")->with('message', "Buchung gespeichert.");
    }
}
