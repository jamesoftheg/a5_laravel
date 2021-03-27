<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>Rooms</h1>
    <p>This is the rooms page.</p>

    @if(count($rooms) > 0)
            @foreach($rooms as $key => $room)
            <?php $randomImg = rand(1, 6); ?>
                <div class="card card-body bg-light">
                    <h3>{{$room->name}}</h3>
                    <h4>Room number: {{$room->number}}</h4>
                    <h4>Maximum occupancy: {{$room->occupancy}}</h4>
                    <img src="{{URL('/img'.'/'.$randomImg.'.jpg')}}" alt="Suite" style="width:100%">
                    <p>{{$room->description}}</p>
                    <a href="{{ route('rooms.edit',$room->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{ url('/rooms', ['id' => $room->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                    </form>
                </div>
            @endforeach
    @else
        <p>No rooms found.</p>
    @endif

@endsection