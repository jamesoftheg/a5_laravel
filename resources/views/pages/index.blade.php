<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>Overlook Hotel</h1>
    <img src="{{URL('/img/hotelrear.jpg')}}" alt="Hotel" style="width:100%">
    <p>Constructed in 1909, the Overlook stands on the southern slope of Mt. Torrance at an elevation of 6,000 feet. 
        This beautiful 55,000 square foot structure rises out of a pristine alpine landscape and is still being used for its original intent 
        – a magnificent ski lodge and mountain retreat for everyone to enjoy. Legendary and awe-inspiring, it's a tribute to the rugged spirit of Colorado. 
        Declared a National Historic Landmark in 1977, the Overlook Hotel is one of Colorado’s most popular tourist attractions, drawing nearly two million visitors every year.
    </p>
    <img src="{{URL('/img/pool.jpg')}}" alt="Hotel" style="width:100%">
    <p>
        Timberline Lodge stands as a monument to the hundreds of local artisans and craftsmen who created nearly everything you see inside it—
        from the artwork to the furniture to the custom metal fixtures. 
        A walk through the lodge is like walking through the history of the Mt. Torrance area and Colorado. 
    </p>
    <img src="{{URL('/img/hotel.jpg')}}" alt="Hotel" style="width:100%">
    <p>Delbert Grady, referred to as the “Parkitect,” is famously well known for designing several prominent National Park Service Lodges including 
        Bryce Canyon Lodge, Zion Lodge, and Yosemite’s Ahwahnee Lodge. Described as “the standard for architecture on public lands,”
        his rustic style was characterized by natural local materials and a design that blended into the landscape. 
        His original design for the lodge focused on a central headhouse, which holds the 800,000 pound great stone chimney. 
        The headhouse is flanked by two uneven wings where the dining room, guestrooms, and other facilities are located.
    </p>
@endsection
