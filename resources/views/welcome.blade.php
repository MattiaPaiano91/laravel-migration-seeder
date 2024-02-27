@extends('layouts.app')

@section('page-title', 'Home')
    
@section('main-content')
<h3>
    Vedi i treni che partono <a href="{{ '/departure' }}">oggi</a>
</h3>
<h1 class="text-center mt-5 ">
    Train station
</h1>
<div class="container-fluid">
    <div class="card-container d-flex flex-wrap ">
        @foreach ($trains as $train)
            <div class="card p-3">
                <ul class="p-0">
                    <li>
                        <h6 class="d-inline-block"> Train ID:</h6> {{ $train->id }}
                    </li>
                    <li>Departure station: {{ $train->departure_station }}</li>
                    <li>Arrival station: {{ $train->arrival_station }}</li>
                    <li>Departure time: {{ $train->departure_time }}</li>
                    <li>Arrival time: {{ $train->arrival_time }}</li>
                    <li>Number of carriages: {{ $train->number_of_carriages }}</li>
                    <li>Company: {{ $train->company }}</li>
                    <li>In time:
                        @if ($train->in_time == 1)
                       {{ 'yes' }}
                       @endif</li>
                   </ul>
               </div>
           @endforeach
       </div>
   </div>
   @endsection
                    
                        
