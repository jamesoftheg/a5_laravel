<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>Rooms</h1>
    <p>This is the rooms page.</p>

    @if(count($rooms) > 0)
            @foreach($rooms as $key => $room)
                <div class="card card-body bg-light">
                    <h3>{{$room->name}}</h3>
                    <h4>Room number: {{$room->number}}</h4>
                    <h4>Maximum occupancy: {{$room->occupancy}}</h4>
                    <p>{{$room->description}}</p>
                    <h2><a href="/rooms/{{$room->id}}">Show Room Details</a></h2>
                    <form method="post" action="{{ route('rooms.destroy'), {{$room->id}} }}">                   
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}              
                        <button type="submit">Delete</button>
                    </form>
                </div>
            @endforeach
    @else
        <p>No rooms found.</p>
    @endif

@endsection