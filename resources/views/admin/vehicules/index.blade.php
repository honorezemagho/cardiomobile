@extends('adminlte::page')

@section('content')

<h1 class="text-center"> Vehicules Personnels </h1>

<table class = "table">

    <thead>
    <tr>
        <th> Id</th>
        <th> Nom</th>
        <th>Propriétaire</th>
        <th> Ville</th>
        <th> Quartier</th>
        <th>Téléphone</th>
    </tr>
    </thead>

    <tbody>
    @if($vehicules)

        @foreach($vehicules as $vehicule)

            <tr>
                <td>{{$vehicule->id}}</td>
                <td>{{$vehicule->name}}</td>
                <td>{{$vehicule->owner}}</td>
                <td>{{$vehicule->ville->name}}</td>
                <td>{{$vehicule->quartier->name}}</td>
                <td>{{$vehicule->phone}}</td>
            </tr>

        @endforeach
    @endif

    </tbody>
</table>

    @endsection