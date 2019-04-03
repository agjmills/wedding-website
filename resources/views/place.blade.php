@extends('layouts.wedding')

@section('title', 'Veronika & Alex | Place')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5 mb-5">
            <div class="col-md-12 text-center">
                <h1>Crown &amp; Sandys</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="/img/crown-and-sandys.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div id="google-map">
                    <iframe frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJaVeVDc_zcEgRRxgb-LFIfTs"
                            allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
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
            <div class="col-md-12 text-center">
                <p>Crown and Sandys</p>
                <p>
                    Main Road<br>
                    Ombersley<br>
                    WR9 0EW
                </p>

                <p>01905 620252</p>
            </div>
        </div>
    </div>
@stop
