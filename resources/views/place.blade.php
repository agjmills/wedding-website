@extends('layouts.wedding')

@section('title', 'Veronika & Alex | Place')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-md-2 offset-md-5">
                <h1>Crown &amp; Sandys</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="/img/crown-and-sandys.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>
                    Situated in the picturesque 'black and white village' of Ombersley, only three minutes outside of
                    Worcester. This former Coaching Inn has a fantastic history dating back to the 17th Century.
                </p>

                <p>
                    The Crown and Sandys (pronounced Sands) is derived from the link between King Charles I and his
                    son Charles II and the Sandys family during the civil wars of 1645-57. The coaching inn underwent
                    considerable alteration around 1810 when the Marchioness of Downshire Baroness Sandys carried out
                    extensive re building improvements on the village of Ombersley.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        function initMap() {
            var uluru = {lat: -25.344, lng: 131.036};
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 4, center: uluru});
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key={{ config('google.maps.apiKey') }}&callback=initMap">
    </script>
@stop
