@extends('layouts.app')

@section('page-title', 'Home')
    
@section('main-content')
    <h1 class="text-center mt-5 ">
   Treni in Partenza Oggi
</h1>
<div class="container-fluid">
    <div class="card-container d-flex flex-wrap">
        @foreach ($trainsToday as $elem)
            <div class="card p-3">
                <ul class="p-0">
                    <li>
                        <h6 class="d-inline-block"> Train ID:</h6> {{ $elem->id }}
                    </li>
                    <li>Departure station: {{ $elem->departure_station }}</li>
                    <li>Arrival station: {{ $elem->arrival_station }}</li>
                    <li>Departure time: {{ $elem->departure_date }}</li>
                    <li>Arrival time: {{ $elem->arrival_date }}</li>
                    <li>Number of carriages: {{ $elem->number_of_carriages }}</li>
                    <li>Company: {{ $elem->company }}</li>
                    <li>In time:
                        @if ($elem->in_time == 1)
                            {{ 'yes' }}
                       @endif</li>
                   </ul>
               </div>
           @endforeach
       </div>
   </div>
@endsection