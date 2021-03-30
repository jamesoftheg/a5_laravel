<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>Rooms</h1>
    <p>The hotel and its restaurants continue to be open for overnight guests only. 
        Torrance County COVID-19 risk levels have improved, allowing restaurants and bars to open with limited seating capacity. 
        Stay safe and healthy and we appreciate you all working with us and adhering to local guidelines during these times.
    </p>
    <p>Test Suite 404 has been provided with bookings to test delete from Rooms and Bookings.</p>
    <a href="{{ URL('rooms/create')}}" class="btn btn-primary btn-block">Create a new Room</a>

    @if(count($rooms) > 0)
            @foreach($rooms as $key => $room)
            <?php $randomImg = rand(1, 6); ?>
            <div class="hotelcard">
                <div class="card card-body bg-light">
                    <h3>{{$room->name}}</h3>
                    <h4>Room number: {{$room->number}}</h4>
                    <h4>Maximum occupancy: {{$room->occupancy}}</h4>
                    <img src="{{URL('/img'.'/'.$randomImg.'.jpg')}}" alt="Suite" style="width:100%">
                    <p>{{$room->description}}</p>
                    <a href="{{ URL('rooms/' . $room->id . '/edit')}}" class="btn btn-primary">Edit</a>
                    <form action="{{ URL('/rooms', ['id' => $room->id]) }}" method="post">
                        <input class="btn btn-danger btn-block" name="delete" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                    </form>
                </div>
            </div>
            @endforeach
    @else
        <p>No rooms found.</p>
    @endif

@endsection