@extends('adminlte::page')

@section('content');

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
        <th>Date de Création</th>
        <th> Dernière Modification</th>
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
                <td>{{$vehicule->created_at->diffForhumans()}}</td>
                <td>{{$vehicule->updated_at->diffForhumans()}}</td>
            </tr>

        @endforeach
    @endif

    </tbody>
</table>

    @endsection