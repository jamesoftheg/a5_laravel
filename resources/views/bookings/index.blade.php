<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <div class="container">
        <h1>Bookings</h1>
        <p>This is the bookings page.</p>

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
        @if(count($rooms) > 0)
            <form action="/bookings" method="post">
                @csrf
                <div class="form-group">
                    <label for="roomName">Room Name</label>
                    <select class="form-control" name="room_name">
                        @foreach($rooms as $room)
                        <option value="{{$room->name}}">{{$room->name}}</option>
                        @endforeach
                    </select>
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
        @else
            <p>No available rooms found.</p>
        @endif
    </div>
    <div class="container">
        <div class="hotelcard">
        @if(count($bookings) > 0)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Room Number</th>
                    <th scope="col">Room Name</th>
                    <th scope="col">Guest Name</th>
                    <th scope="col">Booking Date</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $key => $booking)
                        <tr>
                            <td>{{$booking->room_number}}</td>
                            <td>{{$booking->room_name}}</td>
                            <td>{{$booking->guest_name}}</td>
                            <td>{{$booking->booking_date}}</td>
                            <td>                    
                                <form action="{{ URL('/bookings', ['id' => $booking->id]) }}" method="post">
                                    <input class="btn btn-danger" type="submit" value="Delete" />
                                    @method('delete')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No rooms found.</p>
        @endif
        </div>
    </div>
@endsection