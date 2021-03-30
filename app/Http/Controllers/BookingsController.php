<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Facades\Validator;

/**
 * "StAuth10065: I James Gelfand, 000275852 certify that this material is my original work. 
 * No other person's work has been used without due acknowledgement. I have not made my work available to anyone else."
 * 
 * Hotel text from https://www.timberlinelodge.com
 */

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
        $rooms = Room::all();
        return view('bookings.index')->with('bookings', $bookings)->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all(['name', 'number', 'id']);
        return view('bookings.create')->with('rooms', $rooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = $request->room_name;
        $date = $request->booking_date;

        $validator = Validator::make($request->all(), [
            'room_name' => 'required',
            'guest_name' => 'required',
            'booking_date' => 'required',
        ]);

        if ($this->dateValidation($room, $date) == FALSE || $validator->fails()) {
            if ($room!= null && $date != null) {
                if ($this->dateValidation($room, $date) == FALSE) {
                    $validator->errors()->add('booking_date', 'Your selected date has been booked.');
                }
            }
            return redirect('bookings')
                ->withErrors($validator)
                ->withInput();
        } 
         else {
            // store
            $roomName = $request->room_name;
            $room_id = Room::select('*')->where('name', $roomName)->value('id');
            $room_number = Room::select('*')->where('name', $roomName)->value('number');

            $booking = new Booking;
            $booking->room_id = $room_id;
            $booking->room_number = $room_number;
            $booking->room_name = $request->room_name;
            $booking->guest_name = $request->guest_name;
            $booking->booking_date = $request->booking_date;
            $booking->save();

            $bookings = Booking::all();
            $rooms = Room::all();
            return view('bookings.index')->with('bookings', $bookings)->with('rooms', $rooms);
        }
    }

    function dateValidation($room, $date)
    {
        $query = Booking::select('*')->where('room_name', $room)->where('booking_date', $date)->count();

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
        $rooms = Room::all();
        return view('bookings.index')->with('bookings', $bookings)->with('rooms', $rooms);
    }
}
