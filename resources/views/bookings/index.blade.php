<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>Bookings</h1>
    <p>This is the bookings page.</p>

    <a href="{{ URL('bookings/create')}}" class="btn btn-primary">Create a new Booking</a>

    @if(count($bookings) > 0)

    @else
        <p>No rooms found.</p>
    @endif

@endsection