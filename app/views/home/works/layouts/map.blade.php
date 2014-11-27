<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<script src="{{URL::asset('assets/js/gmaps.js')}}"></script>



<!--

<div class="row">

    <div class="column small-12">

        <ul class="large-block-grid-2 sub-menu">

            <li>

                <a href="{{URL::to('/occupations')}}">Все обьекты</a>

            </li>

            @if(isset($work))

                <li>

                    <a href="{{URL::to('/work/show/' . $work->id)}}">{{$work->name}}</a>

                </li>

            @endif

        </ul>

    </div>

</div>

-->



<div class="map-container row transparent-block box-shadow">

    <div class="column small-12">

        <div id="map">



        </div>

    </div>

</div>



<script>

    var map = new GMaps({

        div: '#map',

    @if(isset($work))

        lat: {{$work->lat}},

    lng: {{$work->lng}},

    zoom: 13,

    @else

    lat: 47.023154,

        lng: 28.841,

        zoom: 12,

    @endif



    enableNewStyle: true

    });

    function AddWork(lat, lng, title, url) {

        map.addMarker({
          lat: lat,
          lng: lng,
          title: title,
          click: function(e) {
            window.location.href = url;
          }
        });
        
    }

    @if(!$works->isEmpty())

        var works = [

    @foreach($works as $workLocal)

    {

        id: {{$workLocal->id}},

        name: '{{$workLocal->name}}',

        url: '{{URL::to('/work/show')}}/{{$workLocal->id}}',

        lat: {{$workLocal->lat}},

        lng: {{$workLocal->lng}}

    }

        @if(last($works) != $workLocal) , @endif

    @endforeach

    ];



    for(var workIterator in works) {



        AddWork(works[workIterator].lat, works[workIterator].lng, works[workIterator].name, works[workIterator].url);





    }

    @endif

</script>

