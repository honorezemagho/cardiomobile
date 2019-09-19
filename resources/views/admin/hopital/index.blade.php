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
            </tr>

        @endforeach
    @endif

    </tbody>
</table>

@endsection