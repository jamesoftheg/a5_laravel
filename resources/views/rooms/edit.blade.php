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
    {{ Form::model($room, array('route' => array('rooms.update', $room->id), 'method' => 'PUT')) }}
        @method('put')
        @csrf
        <div class="form-group">
            <label for="roomDescription">Room Description</label>
            <textarea type="text" class="form-control" id="roomDescription" name="description" value={{ $room->description }}></textarea>
            {{ Form::textarea('name', $room->description, array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Submit Edit', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@endsection