@extends('layouts.layout')

@section('main-content')
<h1 class="text-center p-5">
    Train Station
</h1>
<div class="container">
    <div class="row">

        @foreach ($trains as $train)
            <div class="col-3">
                <div class="card mb-3" style="width: 100;">
                    <div class="card-body">
                    <h5 class="card-title">Stazione di partenza:<br> <span>{{$train->departure_station}}</span></h5>
                    <h5 class="card-title mb-3">Stazione di arrivo:<br> <span>{{$train->arrival_station}}</span></h5>
                    <h6 class="card-subtitle mb-2">Orario di partenza: <span>{{$train->departure_time}}</span></h6>
                    <p class="card-text">Compagnia aerea: <span><strong>{{$train->company}}</strong></span></p>
                    <a href="#" class="card-link ">Compra il biglietto</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>



@endsection