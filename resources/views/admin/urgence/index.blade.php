@extends('adminlte::page')
@section('content')

    <h2 class="text-center"><span>Urgences Médecins </span></h2>


    <table class = "table">

        <thead>
        <tr>
            <th> Id</th>
            <th> Nom</th>
            <th> Ville</th>
            <th> Quartier</th>
            <th>Téléphone</th>
            <th>Description</th>
            <th>Date de Création</th>
            <th> Dernière Modification</th>
        </tr>
        </thead>

        <tbody>
        @if($medecins)

            @foreach($medecins as $medecin)

                <tr>
                    <td>{{$medecin->id}}</td>
                    <td>{{$medecin->name}}</td>
                    <td>{{$medecin->ville->name}}</td>
                    <td>{{$medecin->quartier->name}}</td>
                    <td>{{$medecin->phone}}</td>
                    <td>{{$medecin->description}}</td>
                    <td>{{$medecin->created_at->diffForhumans()}}</td>
                    <td>{{$medecin->updated_at->diffForhumans()}}</td>
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

@endsection
