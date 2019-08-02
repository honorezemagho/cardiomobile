@extends('adminlte::page');

@section('content');

    <h1 class="text-center"> Structures Hospitalières </h1>

<table class = "table">

    <thead>
    <tr>
        <th> Id</th>
        <th> Nom</th>
        <th>Structure</td>
        <th> Ville</th>
        <th> Quartier</th>
        <th>Téléphone</th>
        <th>Date de Création</th>
        <th> Dernière Modification</th>
    </tr>
    </thead>

    <tbody>
    @if($hopitals)

        @foreach($hopitals as $hopital)

            <tr>
                <td>{{$hopital->id}}</td>
                <td>{{$hopital->name}}</td>
                <td>{{ $hopital->structure->name }}</td>
               <td>{{$hopital->ville->name}}</td>
                <td>{{$hopital->quartier->name}}</td>
                <td>{{$hopital->phone}}</td>
                <td>{{$hopital->created_at->diffForhumans()}}</td>
                <td>{{$hopital->updated_at->diffForhumans()}}</td>
            </tr>

        @endforeach
    @endif

    </tbody>
</table>

@endsection