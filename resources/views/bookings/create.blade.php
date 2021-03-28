@extends('layouts.app')

@section('content')
    <h1>Add New Booking</h1>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/bookings" method="post">
        @csrf
        <div class="form-group">
            <label for="roomNumber">Room Number</label>
            <input type="text" class="form-control" id="roomNumber"  name="room_number">
        </div>
        <div class="form-group">
            <label for="roomName">Room Name</label>
            <select class="form-control" name="room_name">
                @foreach($rooms as $room)
                  <option value="{{$room->name}}">{{$room->name}}</option>
                @endforeach
            </select>
            <!--<input type="text" class="form-control" id="roomName"  name="room_name">-->
        </div>
        <div class="form-group">
            <label for="guestName">Guest Name</label>
            <input type="text" class="form-control" id="guestName"  name="guest_name">
        </div>
        <div class="form-group">
            <label for="bookingData">Booking Date</label>
            <input type="date" class="form-control" id="bookingData" name="booking_date"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection