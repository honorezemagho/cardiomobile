@extends('adminlte::page')
@section('content')

    <h2 class="text-center"><span>Ambulances Commandées </span></h2>

    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th> Nom</th>
            <th> Ville Départ</th>
            <th> Quartier Départ </th>
            <th> Ville Arrivée</th>
            <th> Quartier Arrivée </th>
            <th> Téléphone </th>
            <th> Description</th>
        </tr>
        </thead>

        <tbody>
        @if($itineraires)

            @foreach($itineraires as $itineraire)
                <tr>
                    <td> {{$itineraire->id}} </td>
                    <td> {{$itineraire->name}}</td>
                    <td>{{ $itineraire->ville_start->name}}</td>
                    <td> {{$itineraire->quartier_start->name}}</td>
                    <td> {{$itineraire->ville_stop->name}}</td>
                    <td> {{$itineraire->quartier_stop->name}}</td>
                    <td> {{$itineraire->phone}}</td>
                    <td> {{$itineraire->description ? $itineraire->description : 'Pas de Description'}} </td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>


@endsection

