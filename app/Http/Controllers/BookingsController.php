<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index')->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [ 'booking_date.unique' => 'Date has been booked', ];

        $validator = Validator::make($request->all(), [
            'room_number' => 'required',
            'room_name' => 'required',
            'guest_name' => 'required',
            'booking_date' => 'required',
        ]);

        $room = $request->room_number;
        $date = $request->booking_date;

        if ($this->dateValidation($room, $date) == FALSE) {
            $bookings = Booking::all();
            return view('bookings.index')->with('bookings', $bookings);
        }

        if ($validator->fails()) {
            return redirect('bookings.create')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $booking = new Booking;
            $booking->room_number = $request->room_number;
            $booking->room_name = $request->room_name;
            $booking->guest_name = $request->guest_name;
            $booking->booking_date = $request->booking_date;
            $booking->save();

            $bookings = Booking::all();
            return view('bookings.index')->with('bookings', $bookings);
        }
    }

    function dateValidation($room, $date)
    {
        $query = Booking::select('*')->where('room_number', $room)->where('booking_date', $date)->count();

        if($query >= 1) {
            return FALSE;  
        } 
        return TRUE;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Booking::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('bookings.edit')->with('booking', $booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        $bookings = Booking::all();
        return view('bookings.index')->with('bookings', $bookings);
    }
}
