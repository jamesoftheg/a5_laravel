@extends('layouts.app')

@section('content')
    <h1>Edit {{ $room ->name }}</h1>
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
    <form action="{{url('rooms', [$room->id])}}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="roomDescription">Room Description</label>
            <textarea type="text" class="form-control" id="roomDescription" name="description" value={{ $room->description }}></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection