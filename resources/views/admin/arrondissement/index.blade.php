@extends('adminlte::page')

@section('content')

    <h1 style="text-align: center"> Arrondissements </h1>

    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th> Nom </th>
            <th> Ville</th>
            <th> Actions</th>
        </tr>
        </thead>

        <tbody>
        @if($arrondissements)

            @foreach($arrondissements as $arrondissement)
                <tr>
                    <td> {{$arrondissement->id}} </td>
                    <td class="visible-xs"><a href="{{ URL::action('AdminArrondissementController@edit',  $arrondissement->id) }}">{{ $arrondissement->name}}</a></td>
                    <td class="hidden-xs">{{ $arrondissement->name}}</td>
                    <td> {{$arrondissement->ville->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ URL::action('AdminArrondissementController@edit', $arrondissement->id) }}">Modifier</a>
                        {!! Form::open(['method' => 'DELETE','action' => ['AdminArrondissementController@destroy', $arrondissement->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger inline']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif


        </tbody>
    </table>

@stop