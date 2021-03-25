<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>{{$title}}</h1>
    <p>This is the services page.</p>
    <!-- Check to see if the services array has data -->
    @if(count($services) > 0)
        <ul>
            @foreach($services as $service)
                <li>{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
