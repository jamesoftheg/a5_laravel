<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>Rooms</h1>
    <p>This is the rooms page.</p>

    @if(count($rooms) > 0)
        <ul class="list-group">
            @foreach($rooms as $room)
                <li class="list-group-item">{{$room->name}}</li>
            @endforeach
        </ul>
    @else
        <p>No rooms found.</p>
    @endif

@endsection