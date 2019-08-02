@extends('adminlte::page')
@section('content')
    <h1 style="text-align: center">  Ajouter un Véhicule </h1>
    <script src="{{ asset('js/custom.js') }}"></script>

    {!! Form::open(['method' =>'POST', 'action' => 'AdminVehiculesController@store']) !!}

    <div class = "form-group">
        {!! Form::label('name', 'Nom du véhicule: ') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>


    <div class = "form-group">
        {!! Form::label('owner', 'Propriétaire:') !!}
        {!! Form::text('owner', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('ville_id', 'Ville :') !!}
        {!! Form::select('ville_id', [null => 'Veuillez choisir une Ville'] + $villes , null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('quartier_id', 'Quartier :') !!}
        {!! Form::select('quartier_id', [null => 'Veuillez choisir un Quartier'] + $quartiers , null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        {!! Form::label('phone', 'Téléphone :') !!}
        {!! Form::number('phone', null, ['class' => 'form-control']) !!}
    </div>

    <div class = "form-group">
        <input type="hidden" value="{{$matricules}}" name="matricule">
    </div>


    <div class = "form-group">
        {!! Form::Submit ('Créer', ['class' => 'btn btn-primary'] ) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')

@endsection