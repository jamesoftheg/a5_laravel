<!-- This specifies the layout we want to use -->
@extends('layouts.app')

<!-- If we want this to go into our content we have to wrap in section -->
@section('content')
    <h1>About the Overlook</h1>

    <div class="row">
        <div class="col-lg-4">
          <div class="thumbnail">
            <img src="{{URL('/img/sunset.jpg')}}" alt="Hotel" style="width:100%">
            <div class="caption">
            <p>The legendary Overlook Hotel is famous for its charm and history; located in beautiful Colorado. 
                Set high on the shoulder of one of the most iconic peaks in the Rockies, Overlook continues, after more than a century, 
                to offer one of the most exciting and unique high-alpine mountain experiences in North America.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
              <img src="{{URL('/img/hotel.jpg')}}" alt="Hotel" style="width:100%">
              <div class="caption">
              <p>One of the best places to stay in Colorado! Stay in the Overlook Hotel featuring historic hotel rooms offering a unique experience and classically styled furnishings. </p>
              </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <img src="{{URL('/img/lodge.jpg')}}" alt="Hotel" style="width:100%">
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
            <img src="{{URL('/img/gold.jpg')}}" alt="Hotel" style="width:100%">
            <div class="caption">
            <p>The Gold Room was the venue for the hotel's inaugural July 4th ball in 1921. 
              Now recognized as one of Colorado's best examples of Art Moderne architecture, The Gold Room has been designated as a National Historic Site. 
              As the preferred space for high profile weddings, social fetes, conventions and corporate celebrations, this one-of-a-kind event venue has played host to royalty on several occasions.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
              <img src="{{URL('/img/bar.jpg')}}" alt="Hotel" style="width:100%">
              <div class="caption">
              <p>The Gold Room Bar features lunch and dinner as well as fine beverage selections, a historic cocktail menu and Colorado's largest selection of whiskeys and single malt scotches. 
                The wine program will awaken your inner sommelier, and the Overlook Select Old Fashioned, 291 Sm’oaked Old Fashion or Redrum Punch may just cause your cares to melt away. </p>
              </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <img src="{{URL('/img/lounge.jpg')}}" alt="Hotel" style="width:100%">
                <div class="caption">
                <p>The three themes for the Hotel – Native American motif, pioneer, and native flora and fauna – were to be incorporated in every aspect of the lodge, down to the furniture and artwork. 
                  Works Progress Administration (WPA) interior designer Margery Hoffman Smith collaborated with textile weavers, blacksmiths, and woodworkers in order to convey those interior themes. 
                  She also selected water colors and oil paintings to adorn the Hotel. 
                </p>
                </div>
            </div>
        </div>
    </div>

    <h1>Views from the Overlook</h1>
    <div class="row">
      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="{{URL('/img/fire.jpg')}}" alt="Hotel" style="width:100%">
        </div>
      </div>
      <div class="col-lg-4">
          <div class="thumbnail">
            <img src="{{URL('/img/carpet.jpg')}}" alt="Hotel" style="width:100%">
          </div>
      </div>
      <div class="col-lg-4">
          <div class="thumbnail">
              <img src="{{URL('/img/hallway.jpg')}}" alt="Hotel" style="width:100%">
          </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="thumbnail">
            <img src="{{URL('/img/checkin.jpg')}}" alt="Hotel" style="width:100%">
          </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
              <img src="{{URL('/img/ballroom.jpg')}}" alt="Hotel" style="width:100%">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <img src="{{URL('/img/lobby-night.jpg')}}" alt="Hotel" style="width:100%">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="thumbnail">
            <img src="{{URL('/img/fire.jpg')}}" alt="Hotel" style="width:100%">
          </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
              <img src="{{URL('/img/lobby-stairs.jpg')}}" alt="Hotel" style="width:100%">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <img src="{{URL('/img/maze.jpg')}}" alt="Hotel" style="width:100%">
            </div>
        </div>
      </div>

  </div>
    
@endsection