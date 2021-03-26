<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>{{$title}}</h1>
    <p>This is the about page.</p>

    <div class="row">
        <div class="col-lg-4">
          <div class="thumbnail">
            <img src="{{URL('/img/sunset.jpg')}}" alt="Lights" style="width:100%">
            <div class="caption">
            <p>The legendary Overlook Hotel is famous for its charm and history; located in beautiful Colorado. 
                Set high on the shoulder of one of the most iconic peaks in the Rockies, Overlook continues, after 80 years, 
                to offer one of the most exciting and unique high-alpine mountain experiences in North America.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
              <img src="{{URL('/img/hotel.jpg')}}" alt="Lights" style="width:100%">
              <div class="caption">
              <p>One of the best places to stay in Colorado! Stay in the Overlook Hotel featuring historic hotel rooms offering a unique experience and classically styled furnishings. </p>
              </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <img src="{{URL('/img/lodge.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                <p>Built in 1907, Overlook Hotel has always been a grand refuge for visitors wanting to experience the magnificent and expansive high-alpine environment of Mt. Torrance. 
                    A night (or a few) enjoyed in the comfort and warmth of the Hotel is like stepping back into simpler times, yet with all modern conveniences discreetly available.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
          <div class="thumbnail">
            <img src="{{URL('/img/gold.jpg')}}" alt="Lights" style="width:100%">
            <div class="caption">
            <p>The Gold Room was the venue for the hotel's inaugural July 4th ball in 1921.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
              <img src="{{URL('/img/bar.jpg')}}" alt="Lights" style="width:100%">
              <div class="caption">
              <p>Lorem ipsum...</p>
              </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <img src="{{URL('/img/lounge.jpg')}}" alt="Lights" style="width:100%">
                <div class="caption">
                <p>Lorem ipsum...</p>
                </div>
            </div>
        </div>
    </div>

    
@endsection