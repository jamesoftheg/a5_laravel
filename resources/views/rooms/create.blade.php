@extends('layouts.app')

@section('content')
    <h1>Add New Room</h1>
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
    <form action="/rooms" method="post">
        @csrf
        <div class="form-group">
            <label for="roomNumber">Room Number</label>
            <input type="text" class="form-control" id="roomNumber"  name="number">
        </div>
        <div class="form-group">
            <label for="roomName">Room Name</label>
            <input type="text" class="form-control" id="roomName"  name="name">
        </div>
        <div class="form-group">
            <label for="roomDescription">Room Description</label>
            <textarea type="text" class="form-control" id="roomDescription" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="roomAmount">Room Occupancy</label>
            <input type="text" class="form-control" id="roomAmount" name="occupancy"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection