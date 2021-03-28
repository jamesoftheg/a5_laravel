<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>Bookings</h1>
    <p>This is the bookings page.</p>

    <a href="{{ URL('bookings/create')}}" class="btn btn-primary">Create a new Booking</a>

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
                                <input class="btn btn-default" type="submit" value="Delete" />
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

@endsection