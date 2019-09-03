@extends('adminlte::page')

@section('content')
@can('is_gestionnaire')
<h1 class="text-center"> Disponibilité de Médecins </h1>
@endcan

@can('is_admin')
    <h1 class="text-center"> Disponibilité de Médecins </h1>
@endcan

@can('is_medecin')
    <h1 class="text-center"> Ma Disponibilité </h1>
@endcan


<table class = "table">

    <thead>
    <tr>
        <th> Id</th>
        <th> Date </th>
        <th> Heure</th>
        <th>Nom du Médecin</th>
    </tr>
    </thead>

    <tbody>

<?php
use Carbon\Carbon;
$locale = 'fr_FR';
use App\Available;
$availables = Available::where('medecin_id', Auth::user()->id)->get();
$availables2 = Available::all();
?>

@can('is_admin')
       @if($availables2)
           @foreach($availables2 as $available)

               <tr>
                  <td>{{$available->id}}</td>
                   <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)->IsoFormat(' Do MMMM YYYY')}}</td>
                   <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)->toTimeString()}}</td>
                   <td>{{$available->medecin->name}}</td>
               </tr>

           @endforeach
       @endif
@endcan


@can('is_gestionnaire')

    @if($availables2)

        @foreach($availables2 as $available)

            <tr>
                <td>{{$available->id}}</td>
                <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)->IsoFormat(' Do MMMM YYYY')}}</td>
                <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)->toTimeString()}}</td>
                <td>DR. {{$available->medecin->name}}</td>
            </tr>

        @endforeach

    @endif
@endcan

@can('is_medecin')


    @if($availables)

        @foreach($availables as $available)

            <tr>
                <td>{{$available->id}}</td>
                <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)->IsoFormat(' Do MMMM YYYY')}}</td>
                <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)->toTimeString()}}</td>
                <td>{{$available->medecin->name}}</td>
            </tr>

        @endforeach

    @endif
@endcan

    </tbody>
</table>

@endsection