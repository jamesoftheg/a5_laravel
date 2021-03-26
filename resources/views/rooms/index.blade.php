<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>Rooms</h1>
    <p>This is the rooms page.</p>

    @if(count($rooms) > 0)
        <ul class="list-group">
            @foreach($rooms as $room)
                <div class="well">
                    <h3>{{$room->name}}</h3>
                    <h2><a href="/rooms/{{$room->id}}">Show Room Details</a></h2>
                </div>
            @endforeach
        </ul>
    @else
        <p>No rooms found.</p>
    @endif

@endsection