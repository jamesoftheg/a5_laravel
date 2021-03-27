<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Validator;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        // return View::make('rooms.index')->with('rooms', $rooms);
        return view('rooms.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'number' => 'required|numeric',
            'name' => 'required|unique:rooms',
            'description' => 'required',
            'occupancy' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect('rooms.create')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $room = new Room;
            $room->number = $request->number;
            $room->name = $request->name;
            $room->description = $request->description;
            $room->occupancy = $request->occupancy;
            $room->save();

            $rooms = Room::all();
            return view('rooms.index')->with('rooms', $rooms);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Room::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);
        return view('rooms.edit', compact('room'));
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
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('rooms.edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $room = Room::find($id);
            $room->description = $request->description;
            $room->save();

            $rooms = Room::all();
            return view('rooms.index')->with('rooms', $rooms);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();

        $rooms = Room::all();
        return view('rooms.index')->with('rooms', $rooms);
    }
}
