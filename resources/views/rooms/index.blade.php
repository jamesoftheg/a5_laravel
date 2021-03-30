<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>Rooms</h1>
    <p>Since 1907.</p>

    <a href="{{ URL('rooms/create')}}" class="btn btn-primary">Create a new Room</a>

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
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <a href="{{ URL('rooms/' . $room->id . '/edit')}}" class="btn btn-primary">Edit</a>
                            </div>
                            <div class="col-sm">
                                <form action="{{ URL('/rooms', ['id' => $room->id]) }}" method="post">
                                    <input class="btn btn-danger" type="submit" value="Delete" />
                                    @method('delete')
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    <a href="{{ URL('rooms/' . $room->id . '/edit')}}" class="btn btn-primary">Edit</a>
                    <form action="{{ URL('/rooms', ['id' => $room->id]) }}" method="post">
                        <input class="btn btn-danger" name="delete" type="submit" value="Delete" />
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