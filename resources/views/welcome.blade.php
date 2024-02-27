@extends('layouts.app')

@section('page-title', 'Home')
    
@section('main-content')
<h1 class="text-center">
    Train station
</h1>
<div class="container-fluid">
    <div class="card-container d-flex flex-wrap ">
        @foreach ($trains as $train)
            <div class="card p-3">
                <ul>
                    <li>
                        <h6 class="d-inline-block"> Train ID:</h6> {{ $train->id }}
                    </li>
                    <li>departure station: {{ $train->departure_station }}</li>
                    <li>arrival station: {{ $train->arrival_station }}</li>
                    <li>departure time: {{ $train->departure_time }}</li>
                    <li>arrival time: {{ $train->arrival_time }}</li>
                    <li>number of carriages: {{ $train->number_of_carriages }}</li>
                    <li>company: {{ $train->company }}</li>
                    <li>@if ($train->in_time == 1){
                       {{ 'Yes' }}
                    }
                        
                    @endif</li>
                </ul>
            </div>
        @endforeach
    </div>
</div>
@endsection
