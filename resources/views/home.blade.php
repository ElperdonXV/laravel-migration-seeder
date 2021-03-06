@extends('layouts.base')

@section('documentTitle')
    Home
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
            <div class="card col-2 m-2">
                <h1>Train id: {{ $train->id }}</h1>
                <h2>Brand: {{$train->agency}}</h2>
                <h3>Departure station: {{$train->departure_station}}</h3>
                <h3>Departure time: {{$train->departures_time}}</h3>
                <h3>Arrival station: {{$train->arrival_station}}</h3>
                <h3>Arrival time: {{$train->arrival_time}}</h3>
                <span>Number of carriages: {{$train->carriages}}</span>
                <a href="{{route('show', $train)}}" class="btn btn-primary">View Train</a>
            </div>
            @endforeach
        </div>
    </div>
@endsection