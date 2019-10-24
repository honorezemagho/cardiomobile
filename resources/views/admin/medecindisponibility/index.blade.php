@extends('adminlte::page')

@section('content')

    @if(Session::has('deleted_disponibility'))

        <p class="bg-danger"> {{session('deleted_user')}}</p>

    @endif


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
        <th>Durée</th>
        <th>Nom du Médecin
        <th>Prix</th>
    </tr>
    </thead>

    <tbody>

<?php
use Carbon\Carbon;
$locale = 'fr_FR';
use App\Available;
$availables = Available::where('medecin_id', Auth::user()->medecin_id)->get();
$availables2 = Available::all();
?>

@can('is_admin')
       @if($availables2)
           @foreach($availables2 as $available)

               <tr>
                  <td>{{$available->id}}</td>
                   <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)->IsoFormat(' Do MMMM YYYY')}}</td>
                   <td>{{ \Carbon\Carbon::parseFromLocale($available->datetime, $locale)->toTimeString()}}</td>
                   <td>15 Minutes</td>
                   <td>DR. {{$available->medecin->name}}</td>
                   <td>{{$available->price}}

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
                <td>15 Minutes</td>
                <td>DR. {{$available->medecin->name}}</td>
                <td>{{$available->price}}</td>
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
                <td>15 Minutes</td>
                <td>DR. {{$available->medecin->name}}</td>
                <td>{{$available->price}}</td>
                <td><a class="btn btn-primary" href="{{ URL::action('MedecinDisponibilityController@edit',  $available->id) }}">Modifier</a></td>
            </tr>

        @endforeach

    @endif
    <div class="container">
        <div class="col-md-10"></div>
<div class="row col-md-2 pb-80 pt-20">
    <a class="btn btn-primary float-right right-align" href="/admin/medecin/available/create">Ajouter une Disponibilité</a>
</div>
    </div>
@endcan

    </tbody>
</table>

@endsection