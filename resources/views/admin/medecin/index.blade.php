@extends('adminlte::page')

@section('content')

<h1 class="text-center"> Medecins </h1>

<table class = "table">

    <thead>
    <tr>
        <th> Id</th>
        <th> Nom</th>
        <th class="hidden-xs"> Ville</th>
        <th class="hidden-xs"> Quartier</th>
        <th>Spécialité</th>
        <th class="hidden-xs">Email</th>
        <th>Téléphone</th>
        <th>Type</th>
    </tr>
    </thead>

    <tbody>
    @if($medecins)

        @foreach($medecins as $medecin)

            <tr>
                <td>{{$medecin->id}}</td>
                <td class="visible-xs">
                    @can('is_admin')
                        <a href="{{ URL::action('AdminMedecinController@edit', $medecin->id) }}">
                            {{$medecin->name}}
                        </a>
                    @endcan
                    @can('is_gestionnaire')
                        {{$medecin->name}}
                    @endcan
                </td>

                <td class="hidden-xs">
                        {{$medecin->name}}
                </td>

                <td class="hidden-xs">{{$medecin->ville->name}}</td>
                <td class="hidden-xs">{{$medecin->quartier->name}}</td>
                <td>{{$medecin->speciality->speciality}}</td>
                <td class="hidden-xs">{{$medecin->email}}</td>
                <td>{{$medecin->phone}}</td>
                <td>{{$medecin->type->name}}</td>

                <td class="hidden-xs">
                    <a class="btn btn-primary" href="{{ URL::action('AdminMedecinController@edit',  $medecin->id) }}">Modifier</a>
                    {!! Form::open(['method' => 'DELETE','action' => ['AdminMedecinController@destroy', $medecin->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger inline']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>

        @endforeach
    @endif

    </tbody>
</table>

@endsection