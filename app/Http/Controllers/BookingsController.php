<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
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
        $messages = [ 'booking_date.unique' => 'Date has been booked', ];

        $room = $request->room_name;
        $date = $request->booking_date;

        $validator = Validator::make($request->all(), [
            'room_name' => 'required',
            'guest_name' => 'required',
            'booking_date' => 'required',
        ]);

        $this->validate(request(), [
            'booking_date' => [function ($attribute, $room, $date, $fail) {
                $query = Booking::select('*')->where('room_name', $room)->where('booking_date', $date)->count();

                if($query >= 1) {
                    $fail(':Room already booked!'); 
                } 
            }]
        ]);

        /*
        if ($this->dateValidation($room, $date) == FALSE) {
            $bookings = Booking::all();
            return view('bookings.index')->with('bookings', $bookings);
        }
        */

        if ($validator->fails()) {
            return redirect('bookings.create')
                ->withErrors($validator)
                ->withInput();
        } else {
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
